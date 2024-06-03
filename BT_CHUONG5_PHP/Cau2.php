<!DOCTYPE html>
<html>
<head>
    <title>Thông tin sinh viên</title>
</head>
<body>
    <?php
    // Lấy thông tin từ biểu mẫu HTML
    $hoten = $_POST['hoten'];
    $ngaysinh = $_POST['ngaysinh'];
    $lop = $_POST['lop'];
    $diem = $_POST['diem'];

    // Hiển thị thông tin sinh viên
    echo "<h2>Thông tin sinh viên:</h2>";
    echo "<p><strong>Họ và Tên:</strong> $hoten</p>";
    echo "<p><strong>Ngày sinh:</strong> $ngaysinh</p>";
    echo "<p><strong>Lớp:</strong> $lop</p>";
    echo "<p><strong>Điểm:</strong> $diem</p>";
    ?>
</body>
</html>
