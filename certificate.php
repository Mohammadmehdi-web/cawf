<?php
include 'db_con.php';

if (isset($_GET['form_number'])) {
    $form_number = $_GET['form_number'];
    $query = mysqli_query($con, "SELECT * FROM registration_form WHERE form_number='$form_number' AND status='Approved'");
    $data = mysqli_fetch_assoc($query);

    if ($data) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CAWF - 80G Certificate</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

  <style>
    body {
      font-family: Arial, sans-serif;
      font-size: 14px;
      margin: 0;
      padding: 40px;
      background: #fff;
    }

    .container {
      max-width: 800px;
      margin: auto;
      /* border removed for clean PDF edges */
      padding: 30px;
    }

    .header {
      text-align: center;
    }

    .logo-img-top {
      display: flex;
      align-items: center;
      justify-content: space-evenly;
      margin-top: 10px;
    }

    .header img {
      height: 80px;
    }

    .trust-name {
      color: #c38e63;
      font-size: 24px;
      font-weight: bold;
    }

    .info-bar {
      display: flex;
      justify-content: space-between;
      margin: 18px 0;
      font-weight: bold;
    }

    /* Table styling with borders */
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
      border: 1px solid #000;
    }

    th, td {
      padding: 8px 10px;
      text-align: left;
      border: 1px solid #000;
      vertical-align: middle;
    }

    .section-label {
  width: 40px;
  text-align: center;
  vertical-align: middle;
  position: relative;
  padding: 0;
  border: 1px solid #000;
}

.section-label span {
  display: inline-flex;
  transform: rotate(-90deg);
  transform-origin: left top;
  white-space: nowrap;
  font-weight: bold;
  position: absolute;
  top: 50%;
  left: -45px; /* adjust left to center the text */
  width: max-content;
}


    .multi-column {
      display: flex;
      margin-top: 20px;
    }

    .multi-column div {
      flex: 1;
      padding: 10px;
      font-size: 13px;
    }

    .footer {
      margin-top: 20px;
      font-size: 13px;
      line-height: 1.4;
    }

    .footer b {
      display: block;
      margin-top: 10px;
    }

    .underline {
      font-weight: bold;
      height: 2px;
      background: black;
      margin-bottom: 31px;
      border: none;
    }

    p {
      font-size: 14px;
    }

    .print-btn {
      text-align: right;
      margin-bottom: 20px;
    }

    .print-btn button {
      background: #333;
      color: #fff;
      padding: 8px 16px;
      border: none;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="container" id="idCertificate">
    <div class="header">
      <div><strong>80G Certificate</strong></div>
      <div class="logo-img-top">
        <img src="images/logo/cawf black.png" alt="Logo">
        <div class="trust-name">Cine Artist & Worker Welfare Federation</div>
      </div>
    </div>

    <hr class="underline">

    <div class="info-bar">
      <div>☎ +91 9555584040</div>
      <div>PAN: <span style="color: #F28C28;">AAKCC5661N</span></div>
      <div>📞 +91 9555584040</div>
    </div>

    <table>
      <tr>
        <td class="section-label" rowspan="7">Donor Information</td>
        <td><b>Name</b></td>
        <td><?= htmlspecialchars($data['first_name']) ?></td>
      </tr>
      <tr>
        <td><b>PAN No</b></td>
        <td><?= htmlspecialchars($data['pan_no']) ?></td>
      </tr>
      <tr>
        <td><b>Program</b></td>
        <td><?= htmlspecialchars($data['program_type']) ?></td>
      </tr>
      <tr>
        <td><b>Phone Number</b></td>
        <td><?= htmlspecialchars($data['phone']) ?></td>
      </tr>
      <tr>
        <td><b>Email</b></td>
        <td><?= htmlspecialchars($data['email']) ?></td>
      </tr>
      <tr>
        <td><b>Address</b></td>
        <td><?= htmlspecialchars($data['address']) ?></td>
      </tr>
      <tr>
        <td><b>Country</b></td>
        <td>India</td>
      </tr>

      <tr>
        <td class="section-label" rowspan="5">Donation Information</td>
        <td><b>Date</b></td>
        <td><?= date('d-m-Y', strtotime($data['created_at'])) ?></td>
      </tr>
      <tr>
        <td><b>Payment Mode</b></td>
        <td>Online</td>
      </tr>
      <tr>
        <td><b>Donation for</b></td>
        <td>Registration for Lamaa</td>
      </tr>
      <tr>
        <td><b>Amount</b></td>
        <td>₹100 /-</td>
      </tr>
      <tr>
        <td><b>Amount in words</b></td>
        <td>One Hundred Rupees Only</td>
      </tr>
    </table>

    <div class="multi-column">
      <div>
        <b>Our Trusts:</b><br>
        <p>C13 Shivalik Colony, Basant Kaur Marg,<br>Malviya Nagar, Delhi, India</p>
      </div>
    </div>

    <div class="footer">
      <p class="strong" style="text-align:center;">
        <strong>
          Your grant is tax free under section 80G of the Income Tax Act 1961,<br>
          The Unique Registration No. is DELHI/80G2020-21/A/10215 and valid from 18/01/2021
        </strong>
      </p>
      <b>Correspondence Address:</b>
      C13 Shivalik Colony, Basant Kaur Marg, Malviya Nagar, Delhi, India<br>
      <b>Website:</b> <a href="https://cawf.in/">https://cawf.in/</a><br>
      <b>Email us at:</b> <a href="mailto:hello@cawf.in">hello@cawf.in</a>
    </div>
  </div>

  <script>
    window.onload = function () {
      const element = document.getElementById('idCertificate');
      const opt = {
        margin: 0.5,
        filename: 'ID_Certificate_<?= htmlspecialchars($data['form_number']) ?>.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
      };
      html2pdf().from(element).set(opt).save();
    };
  </script>
</body>

</html>
<?php
    } else {
        echo "<h3 style='text-align:center;margin-top:50px;'>❌ Invalid or Unapproved Form Number.</h3>";
    }
} else {
    echo "<h3 style='text-align:center;margin-top:50px;'>❌ No Form Number Provided.</h3>";
}
?>
