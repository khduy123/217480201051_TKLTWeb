<?php
    $username ="root";
    $password ="";
    $server ="localhost";
    $database ="quanlybanhang";

    //Ket noi database sinhvien
    $connect = mysqli_connect($server, $username, $password, $database);
    //Neu ket noi bi loi thi xuat bao loi va thoat
    if(!$connect){
        die("Không kết nối:" .mysqli_connect_error());
        exit();
    }
    //Khai bao gia tri ban dau, khi chua submit cau lệnh Delete sẽ báo lỗi
    $makh = "";
    //Lấy giá trị POST từ form vừa submit
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["makhachhang"])){
            $makh = $_POST['makhachhang'];
        }
    }
    //Xử lý, Delete dữ liệu trong table danh sach
    $sql ="DELETE FROM `khachhang` WHERE `MaKH`='$makh'";
    if(mysqli_query($connect,$sql)){
        echo "Xóa dữ liệu thành công";
    }else{
        echo "Error:" .$sql. "<br>" .mysqli_error($connect);
    }
    //Đóng database
    mysqli_close($connect);
?>