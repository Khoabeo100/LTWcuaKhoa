<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pheptinh = $_POST['pheptinh'];
    $so1 = $_POST['so1'];
    $ketqua = "";

    // Xử lý các phép kiểm tra
    switch ($pheptinh) {
        case "kiemtrachan":
            $ketqua = ($so1 % 2 == 0) ? "Số $so1 là số chẵn" : "Số $so1 là số lẻ";
            break;
        case "kiemtrannt":
            $isPrime = true;
            if ($so1 < 2) {
                $isPrime = false;
            } else {
                for ($i = 2; $i <= sqrt($so1); $i++) {
                    if ($so1 % $i == 0) {
                        $isPrime = false;
                        break;
                    }
                }
            }
            $ketqua = $isPrime ? "Số $so1 là số nguyên tố" : "Số $so1 không phải là số nguyên tố";
            break;
        default:
            $ketqua = "Chưa chọn phép kiểm tra!";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết quả kiểm tra số</title>
</head>
<body>
    <h2>KẾT QUẢ KIỂM TRA SỐ</h2>
    <p>Kết quả: <?php echo $ketqua; ?></p>
    <a href="javascript:history.back()">Quay lại trang trước</a>
</body>
</html>
