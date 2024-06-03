<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color List</title>
</head>
<body>
    <?php
        $colors = ['black', 'blue', 'green', 'red', 'brown', 'magenta']; // Mảng các chuỗi màu

        echo "<ul>"; // Mở thẻ ul

        foreach ($colors as $color) {
            echo "<li style='color: $color;'>$color</li>"; // Xuất từng màu với style tương ứng
        }

        echo "</ul>"; // Đóng thẻ ul
    ?>
</body>
</html>