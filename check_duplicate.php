<?php
include 'db_con.php';

$response = ['exists' => false, 'phone' => false, 'aadhaar' => false, 'email' => false];

$phone = $_POST['phone'];
$aadhaar = $_POST['aadhaar'];
$email = $_POST['email'];

$query = "SELECT phone, aadhaar, email FROM registration_form WHERE phone = ? OR aadhaar = ? OR email = ?";
$stmt = $con->prepare($query);
$stmt->bind_param("sss", $phone, $aadhaar, $email);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc())
{
    if ($row['phone'] === $phone)
        $response['phone'] = true;
    if ($row['aadhaar'] === $aadhaar)
        $response['aadhaar'] = true;
    if ($row['email'] === $email)
        $response['email'] = true;
    $response['exists'] = true;
}

echo json_encode($response);
