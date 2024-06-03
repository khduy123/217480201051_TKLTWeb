<?php
// Phép tính với hai biến cho trước
$x = 3;
$y = 5;

// Phép cộng
$sum = $x + $y;
echo "a. Tổng của \$x và \$y là: " . $sum . "<br>";

// Phép trừ
$subtract = $x - $y;
echo "a. Hiệu của \$x và \$y là: " . $subtract . "<br>";

// Phép nhân
$multiply = $x * $y;
echo "a. Tích của \$x và \$y là: " . $multiply . "<br>";

// Phép chia
if ($y != 0) {
    $divide = $x / $y;
    echo "a. Thương của \$x chia \$y là: " . $divide . "<br>";
} else {
    echo "a. Không thể chia cho 0.<br>";
}

// Phép chia lấy dư
if ($y != 0) {
    $remainder = $x % $y;
    echo "a. Phần dư của \$x chia \$y là: " . $remainder . "<br>";
} else {
    echo "a. Không thể chia cho 0.<br>";
}

// Phép tính với hai biến được lấy ngẫu nhiên
$x = rand(1, 10); // Lấy ngẫu nhiên số từ 1 đến 10
$y = rand(1, 10); // Lấy ngẫu nhiên số từ 1 đến 10

echo "b. Hai số ngẫu nhiên được lấy: \$x = $x, \$y = $y<br>";

// Phép cộng
$sum = $x + $y;
echo "b. Tổng của \$x và \$y là: " . $sum . "<br>";

// Phép trừ
$subtract = $x - $y;
echo "b. Hiệu của \$x và \$y là: " . $subtract . "<br>";

// Phép nhân
$multiply = $x * $y;
echo "b. Tích của \$x và \$y là: " . $multiply . "<br>";

// Phép chia
if ($y != 0) {
    $divide = $x / $y;
    echo "b. Thương của \$x chia \$y là: " . $divide . "<br>";
} else {
    echo "b. Không thể chia cho 0.<br>";
}

// Phép chia lấy dư
if ($y != 0) {
    $remainder = $x % $y;
    echo "b. Phần dư của \$x chia \$y là: " . $remainder . "<br>";
} else {
    echo "b. Không thể chia cho 0.<br>";
}

// Phép tính với hai biến được lấy ngẫu nhiên và $x > $y
do {
    $x = rand(1, 10); // Lấy ngẫu nhiên số từ 1 đến 10
    $y = rand(1, 10); // Lấy ngẫu nhiên số từ 1 đến 10
} while ($x <= $y);

echo "c. Hai số ngẫu nhiên được lấy với điều kiện \$x > \$y: \$x = $x, \$y = $y<br>";

// Phép cộng
$sum = $x + $y;
echo "c. Tổng của \$x và \$y là: " . $sum . "<br>";

// Phép trừ
$subtract = $x - $y;
echo "c. Hiệu của \$x và \$y là: " . $subtract . "<br>";

// Phép nhân
$multiply = $x * $y;
echo "c. Tích của \$x và \$y là: " . $multiply . "<br>";

// Phép chia
if ($y != 0) {
    $divide = $x / $y;
    echo "c. Thương của \$x chia \$y là: " . $divide . "<br>";
} else {
    echo "c. Không thể chia cho 0.<br>";
}

// Phép chia lấy dư
if ($y != 0) {
    $remainder = $x % $y;
    echo "c. Phần dư của \$x chia \$y là: " . $remainder . "<br>";
} else {
    echo "c. Không thể chia cho 0.<br>";
}
?>