<?php
header('Content-Type: application/json');
include '../db_con.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
require '../phpmailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$response = ['status' => 'error', 'message' => 'Something went wrong.'];

if (isset($_POST['id']) && isset($_POST['status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    $query = mysqli_query($con, "SELECT * FROM registration_form WHERE id='$id'");
    $data = mysqli_fetch_assoc($query);

    if ($data) {
        // If requested status is Approved but no qr_image, force status to Not Approved
        if ($status == 'Approved' && empty($data['qr_image'])) {
            $status = 'Not Approved';  // override status
        }

        // Update status in DB
        $update = mysqli_query($con, "UPDATE registration_form SET status='$status' WHERE id='$id'");

        if ($update) {
            if ($status == 'Approved') {
                $mail = new PHPMailer(true);
                try {
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'development@auctech.in';
                    $mail->Password = 'ioup wsjt sbtj pdch';
                    $mail->SMTPSecure = 'tls';
                    $mail->Port = 587;

                    $mail->setFrom('development@auctech.in', 'Cawf Team');
                    $mail->addAddress($data['email'], $data['first_name']);

                    $form_number = $data['form_number'];
                    $id_link = "http://localhost/cawf/id_card.php?form_number=" . urlencode($form_number);
                    $form_link = "http://localhost/cawf/download.php?form=" . urlencode($form_number);
                    $certificate_link = "http://localhost/cawf/certificate.php?form_number=" . urlencode($form_number);

                    $mail->isHTML(true);
                    $mail->Subject = "Welcome to the Lamaa Program | Documents Approved";
                    $mail->Body = "
                        Dear {$data['first_name']},<br><br>
                        Congratulations!<br><br>
                        We are happy to inform you that your enrollment in the Lamaa Program has been successfully approved.<br>
                        You can now download your documents using the links below:<br><br>
                        <a href='$id_link'>[Download ID Card]</a><br>
                        <a href='$form_link'>[Download Registration Form]</a><br>
                        <a href='$certificate_link'>[Download Certificate Form]</a><br><br>
                       
                        We’re excited to have you as part of the Lamaa Program and look forward to your active participation.<br>
                        If you have any questions or need support, feel free to contact us.<br><br>
                        Best regards,<br>
                        Cawf Team
                    ";

                    if ($mail->send()) {
                        $response = ['status' => 'success', 'message' => "Mail sent successfully to {$data['email']}"];
                    } else {
                        $response = ['status' => 'error', 'message' => "❌  Mail failed to send."];
                    }
                } catch (Exception $e) {
                    $response = ['status' => 'error', 'message' => " ❌ Mailer Error: {$mail->ErrorInfo}"];
                }
            } else {
                // For any other status, including forced Not Approved
                $response = ['status' => 'success', 'message' => "❌ Status updated to $status, no mail sent."];
            }
        } else {
            $response = ['status' => 'error', 'message' => "❌ Failed to update status."];
        }
    } else {
        $response = ['status' => 'error', 'message' => "❌ Invalid form ID."];
    }
} else {
    $response = ['status' => 'error', 'message' => "❌ ID or Status not provided."];
}

echo json_encode($response);
