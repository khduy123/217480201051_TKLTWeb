<?php
    $servername ="localhost";
    $database = "quanlybanhang";
    $username = "root";
    $password = "";

    // ket noi databse sinh vien
    $connect = mysqli_connect($servername, $username, $password, $database);
    //neu ket noi bi loi thi xuat bao loi va thoat

    if(!$connect){
        die("Không kết nối:" .mysqli_connect_error());
        exit();
    }

    //khai bao gia tri ban dau
    $mahd ="";
    $makh ="";
    $mahang ="";
    $soluong ="";
    $thanhtien="";

    //lay gia tri submit
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['Mahoadon'])){
            $mahd =$_POST['Mahoadon'];
        }
        if(isset($_POST["MaKhang"])){
            $makh =$_POST['MaKhang'];
        }
        if(isset($_POST["Mahang"])){
            $mahang =$_POST['Mahang'];
        }
        if(isset($_POST["Soluong"])){
            $soluong =$_POST['Soluong'];
        }
        if(isset($_POST["Thanhtien"])){
            $thanhtien =$_POST['Thanhtien'];
        }
    }
    // xử lý, update dư lieu trong tabke danhsach
    $sql="INSERT INTO `hoadon`(`MaHD`, `MaKH`, `MaHang`, `SoLuong`, `ThanhTien`) VALUES ('$mahd','$makh','$mahang','$soluong','$thanhtien')";
    if(mysqli_query($connect, $sql)){
        echo "Thêm dữ liệu thành công";
    }else{
            echo "Error:" .$sql. "<br>" .mysqli_error($connect);
    }
    mysqli_close($connect);
?>