<?php
header('Content-Type: application/json'); 

$response = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = htmlspecialchars($_POST['firstName'], ENT_QUOTES, 'UTF-8');
    $lastName = htmlspecialchars($_POST['lastName'], ENT_QUOTES, 'UTF-8');
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $invoiceId = htmlspecialchars($_POST['invoiceId'], ENT_QUOTES, 'UTF-8');
    $payFor = isset($_POST['payFor']) ? $_POST['payFor'] : [];

    if (!preg_match("/^[\p{L}\s]+$/u", $firstName)) {
        $response['error'] = "Tên chỉ được chứa chữ cái và khoảng trắng.";
    } elseif (!preg_match("/^[\p{L}\s]+$/u", $lastName)) {
        $response['error'] = "Họ chỉ được chứa chữ cái và khoảng trắng.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['error'] = "Định dạng email không hợp lệ.";
    } elseif (!ctype_digit($invoiceId)) {
        $response['error'] = "ID Hóa Đơn phải là số.";
    } elseif (empty($payFor)) {
        $response['error'] = "Vui lòng chọn ít nhất một tùy chọn 'Pay For'.";
    } else {
        $response['success'] = true;
        $response['data'] = [
            'Tên' => $firstName,
            'Họ' => $lastName,
            'Email' => $email,
            'ID Hóa Đơn' => $invoiceId,
            'Tùy Chọn' => implode(", ", $payFor)
        ];
    }

    echo json_encode($response);
}
?>
