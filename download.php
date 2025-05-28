<?php
include('db_con.php');

$form_number = isset($_GET['form']) ? $_GET['form'] : '';

if (empty($form_number)) {
    die("Form number is missing.");
}

$stmt = $con->prepare("SELECT * FROM registration_form WHERE form_number = ?");
$stmt->bind_param("s", $form_number);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows !== 1) {
    die("No record found.");
}

$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Download Registration Form PDF</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f0f0f0;
            font-family: 'Arial', sans-serif;
        }

        .pdf-page {
            width: 210mm;
            min-height: 297mm;
            background: white;
            padding: 14mm 25mm;
            margin: 20px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            position: relative;
            box-sizing: border-box;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 22px;
            text-transform: uppercase;
            color: #222;
            padding-bottom: 14px;
            border-bottom: 2px solid #c3a388;
            display: inline-block;
        }

        .header h3 {
            margin: 5px 0 15px;
            font-size: 16px;
            color: #555;
        }

      .info-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
    background-image: url('images/logo/cawf black.png');
    background-repeat: no-repeat;
    background-position: center;
    background-size: 300px;
    position: relative;
    z-index: 1;
}

.info-table td {
    padding: 16px 19px;
    border: 1px solid #aaa;
    font-size: 14px;
    background-color: rgba(255, 255, 255, 0.85); /* white background with slight transparency to see watermark */
    position: relative;
    z-index: 2;
}
        .info-table td strong {
            color: #333;
        }

        .info-table img {
            max-height: 120px;
            display: block;
            border: 2px solid #2e2c2c;
        }

        .footer {
            position: absolute;
            bottom: 20mm;
            left: 25mm;
            right: 25mm;
            text-align: center;
            font-size: 12px;
            color: #555;
            border-top: 1px dashed #aaa;
            padding-top: 6px;
        }


        .logo-image {
            display: flex;
            justify-content: center;
            gap: 290px;
            margin-bottom: 20px;
            text-align: center;
        }

        .logo-image img {
            height: 100px;
            width: auto;
        }
    </style>
</head>

<body>

    <div class="pdf-page" id="pdfContent">
        <div class="logo-image">
            <div class="cawf-logo">
                <img src="images/logo/cawf black.png" alt="Federation Logo">
            </div>
            <div class="lama-logo">
                <img src="images/logo/lama.jpeg" alt="Federation Logo" style="height: 90px; width: 159px;">
            </div>
        </div><br>

        <div class="header">
            <h1>Cine Artist & Worker Welfare Federation</h1><br><br><br>
            <h3>Student Registration Form Details</h3><br>
        </div>

        <table class="info-table">
            <tr>
                <td class="td-color"><strong>Photo</strong></td>
                <td>
                    <?php
                    if (!empty($data['image_path']) && file_exists($data['image_path'])) {
                        echo '<img src="' . htmlspecialchars($data['image_path']) . '" alt="Profile Photo">';
                    } else {
                        echo 'No photo available';
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td class="td-color"><strong>Form Number</strong></td>
                <td><?php echo htmlspecialchars($data['form_number']); ?></td>
            </tr>
            <tr>
                <td class="td-color"><strong>Name</strong></td>
                <td><?php echo htmlspecialchars($data['first_name']); ?></td>
            </tr>
            <tr>
                <td class="td-color"><strong>Phone</strong></td>
                <td><?php echo htmlspecialchars($data['phone']); ?></td>
            </tr>
            <tr>
                <td class="td-color"><strong>Email</strong></td>
                <td><?php echo htmlspecialchars($data['email']); ?></td>
            </tr>
            <tr>
                <td class="td-color"><strong>Program</strong></td>
                <td><?php echo htmlspecialchars($data['program_type']); ?></td>
            </tr>
            <tr>
                <td class="td-color"><strong>Date of Birth</strong></td>
                <td><?php echo date("d-m-Y", strtotime($data['dob'])); ?></td>
            </tr>
            <tr>
                <td class="td-color"><strong>Gender</strong></td>
                <td><?php echo htmlspecialchars($data['gender']); ?></td>
            </tr>
            <tr>
                <td class="td-color"><strong>Aadhaar Number</strong></td>
                <td><?php echo htmlspecialchars($data['aadhaar']); ?></td>
            </tr>
            <tr>
                <td class="td-color"><strong>Address</strong></td>
                <td><?php echo htmlspecialchars($data['address']); ?></td>
            </tr>
        </table>

        <div class="footer">
            Cine Artist & Worker Welfare Federation &nbsp; | &nbsp; www.cawf.in &nbsp; | &nbsp; Contact: +91 99999 88888
        </div>
    </div>

    <!-- Include html2pdf library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

    <script>
        window.onload = () => {
            const element = document.getElementById('pdfContent');
            html2pdf().from(element).save('<?php echo htmlspecialchars($data["form_number"]); ?>.pdf');
        };
    </script>

</body>

</html>
