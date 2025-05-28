<?php
include('db_con.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'] ?? null;

    if (!$id || !is_numeric($id)) {
        header("Location: error.php?msg=invalid_id");
        exit;
    }

    $qr_image = '';
    if (isset($_FILES['qr_image']) && $_FILES['qr_image']['error'] == 0) {
        $target_dir = "uploads/qrimage/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $filename = uniqid("qr_") . "_" . basename($_FILES["qr_image"]["name"]);
        $target_file = $target_dir . $filename;

        if (move_uploaded_file($_FILES["qr_image"]["tmp_name"], $target_file)) {
            $qr_image = $target_file;
        } else {
            header("Location: error.php?msg=image_upload_failed");
            exit;
        }
    } else {
        header("Location: error.php?msg=no_image");
        exit;
    }

    // Update qr_image for the existing registration_form record
    $stmt = $con->prepare("UPDATE registration_form SET qr_image = ? WHERE id = ?");
    $stmt->bind_param("si", $qr_image, $id);

    if ($stmt->execute()) {
        $_SESSION['payment_update_msg'] = "Payment screenshot uploaded successfully!";
        header("Location: congratulation.php");
        exit;
    } else {
        header("Location: error.php?msg=db_update_failed");
        exit;
    }

    $stmt->close();
    $con->close();
}
?>

