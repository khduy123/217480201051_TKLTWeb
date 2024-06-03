<!DOCTYPE html>
<html>
<head>
    <title>Thao tác với Mảng</title>
</head>
<body>
    <h1>Thao tác với Mảng</h1>
    <form method="post" action="">
        <label for="numbers">Nhập các số nguyên, cách nhau bằng dấu phẩy:</label>
        <input type="text" id="numbers" name="numbers" required>
        <input type="submit" value="Gửi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy dữ liệu từ form
        $numbers = $_POST['numbers'];
        // Chuyển chuỗi thành mảng các số nguyên
        $array = array_map('intval', explode(',', $numbers));
        
        // a. Xuất mảng lên trang web
        echo "<h2>Mảng:</h2>";
        echo implode(", ", $array);

        // b. Đếm tổng số chẵn
        $evenCount = 0;
        foreach ($array as $num) {
            if ($num % 2 == 0) {
                $evenCount++;
            }
        }
        echo "<h2>Tổng số các số chẵn: $evenCount</h2>";

        // c. Tính tổng của các số lẻ trong mảng
        $oddSum = 0;
        foreach ($array as $num) {
            if ($num % 2 != 0) {
                $oddSum += $num;
            }
        }
        echo "<h2>Tổng của các số lẻ: $oddSum</h2>";

        // d. Xuất ra giá trị lớn nhất và nhỏ nhất của mảng
        $maxValue = max($array);
        $minValue = min($array);
        echo "<h2>Giá trị lớn nhất: $maxValue</h2>";
        echo "<h2>Giá trị nhỏ nhất: $minValue</h2>";

        // Xuất đảo ngược các giá trị trong mảng
        $reversedArray = array_reverse($array);
        echo "<h2>Mảng đảo ngược:</h2>";
        echo implode(", ", $reversedArray);
    }
    ?>
</body>
</html>
