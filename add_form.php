<?php
include('db_con.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check terms checkbox
    if (!isset($_POST['terms'])) {
        header("Location: error.php?msg=" . urlencode("terms"));
        exit;
    }

    // Validate phone
    $phone = trim($_POST['phone']);
    if (!preg_match('/^\d{10}$/', $phone)) {
        header("Location: error.php?msg=" . urlencode("Invalid phone number"));
        exit;
    }

    // Validate PAN
    $pan_no = strtoupper(trim($_POST['pan_no']));
    if (!preg_match('/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/', $pan_no)) {
        header("Location: error.php?msg=" . urlencode("Invalid PAN number"));
        exit;
    }

    // Validate Aadhaar
    $aadhaar = trim($_POST['aadhaar']);
    if (!preg_match('/^\d{12}$/', $aadhaar)) {
        header("Location: error.php?msg=" . urlencode("Invalid Aadhaar number"));
        exit;
    }

    // Validate email
    $email = trim($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: error.php?msg=" . urlencode("Invalid email"));
        exit;
    }

    // Generate unique form number
    $result = $con->query("SELECT form_number FROM registration_form ORDER BY id DESC LIMIT 1");
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $last_number = intval(substr($row['form_number'], 4));
        $new_number = $last_number + 1;
    } else {
        $new_number = 1;
    }
    $form_number = 'CAWF' . str_pad($new_number, 4, '0', STR_PAD_LEFT);

    // Other fields
    $first_name = trim($_POST['first_name']);
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $program_type = $_POST['program_type'];
    $address = trim($_POST['address']);

    // Image upload
    $image_path = '';
    if (isset($_FILES['image_path']) && $_FILES['image_path']['error'] == 0) {
        $target_dir = "uploads/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $file_tmp = $_FILES["image_path"]["tmp_name"];
        $file_name = basename($_FILES["image_path"]["name"]);
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $allowed_ext = ['jpg', 'jpeg', 'png'];
        $allowed_mime = ['image/jpeg', 'image/png'];
        $mime = mime_content_type($file_tmp);

        // Check image size (limit: 2MB)
        if ($_FILES["image_path"]["size"] > 2 * 1024 * 1024) {
            header("Location: error.php?msg=" . urlencode("Image too large (max 2MB)"));
            exit;
        }

        if (in_array($file_ext, $allowed_ext) && in_array($mime, $allowed_mime)) {
            $filename = uniqid("img_") . "." . $file_ext;
            $target_file = $target_dir . $filename;

            if (move_uploaded_file($file_tmp, $target_file)) {
                $image_path = $target_file;
            } else {
                header("Location: error.php?msg=" . urlencode("Image upload failed"));
                exit;
            }
        } else {
            header("Location: error.php?msg=" . urlencode("Invalid image type"));
            exit;
        }
    }

    // Insert into database
    $stmt = $con->prepare("INSERT INTO registration_form (form_number, first_name, pan_no, phone, email, dob, gender, aadhaar, program_type, address, image_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssss", $form_number, $first_name, $pan_no, $phone, $email, $dob, $gender, $aadhaar, $program_type, $address, $image_path);

    if ($stmt->execute()) {
        $id = $con->insert_id;

        // Set session variables
        $_SESSION['thank_you_name'] = $first_name;
        $_SESSION['thank_you_form_number'] = $form_number;
        $_SESSION['id'] = $id;

        // Redirect to thank you page
        header("Location: thankyou.php");
        exit;
    } else {
        header("Location: error.php?msg=" . urlencode("Database insert error"));
        exit;
    }

    $stmt->close();
    $con->close();
}
?>
