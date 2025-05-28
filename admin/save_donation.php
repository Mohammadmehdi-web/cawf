<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $address = trim($_POST['address']);
    $message = trim($_POST['message']);
    $added_date = date('Y-m-d H:i:s');

    if (empty($name) || empty($phone) || empty($email) || empty($address) || empty($message)) {
        echo 'error';
        exit;
    }

    $image_path = '';
    if (isset($_FILES['image_path']) && $_FILES['image_path']['error'] == 0) {
        if (!file_exists('donation_uploads')) {
            mkdir('donation_uploads', 0777, true);
        }

        $image_ext = pathinfo($_FILES['image_path']['name'], PATHINFO_EXTENSION);
        $image_path = 'donation_uploads/' . uniqid('donation_', true) . '.' . $image_ext;
        move_uploaded_file($_FILES['image_path']['tmp_name'], $image_path);
    }

    include('../db_con.php');

    $sql = "INSERT INTO add_donation (name, phone, email, address, image_path, message, added_date) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sssssss", $name, $phone, $email, $address, $image_path, $message, $added_date);

    if ($stmt->execute()) {
        echo 'success';
    } else {
        echo 'error';
    }

    $stmt->close();
    $con->close();
}
?>

