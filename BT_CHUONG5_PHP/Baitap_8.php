<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Year ListBox</title>
</head>
<body>
    <select id="yearList"></select>

    <script>
        // Lấy năm hiện tại
        var date = new Date();
        var currentYear = date.getFullYear();

        // Tạo listbox chứa danh sách năm từ 1900 đến năm hiện tại
        var yearListBox = document.getElementById("yearList");
        for (var year = 1900; year <= currentYear; year++) {
            var option = document.createElement("option");
            option.value = year;
            option.text = year;
            yearListBox.appendChild(option);
        }
    </script>
</body>
</html>
