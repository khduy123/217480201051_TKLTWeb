<?php
    $username="root";
    $password="";
    $servername="localhost";
    $database="quanlybanhang";

    //ket noi database sinhvien
    $connect = mysqli_connect($servername, $username, $password, $database);

    //neu ket noi bi loi thi xuat bao loi va thoat
    if(!$connect){
        die("Không kết nối:" .mysqli_connect_error());
        exit();
    }

    //khai bao gia tri ban dau, khi chua submit cau lenh update
    $makh="";
    $tenkh="";
    $namsinh="";
    $dienthoai="";
    $diachi="";

    //lay gia tri POST tu form vua submit
    if(isset($_POST["UPDATED"])) {
        if(isset($_POST["makhachhang"])){
            $makh = $_POST['makhachhang'];
        }

        if(isset($_POST["tenkhachhang"])){
            $tenkh = $_POST['tenkhachhang'];
        }

        if(isset($_POST["namsinh"])){
            $namsinh = $_POST['namsinh'];
        }

        if(isset($_POST["dienthoai"])){
            $dienthoai = $_POST['dienthoai'];
        }

        if(isset($_POST["diachi"])){
            $diachi = $_POST['diachi'];
        }


        //xu ly, update du lieu trong table danhsach
        $sql ="UPDATE khachhang SET `TenKH`='$tenkh',`NamSinh`='$namsinh',`DienThoai`='$dienthoai',`DiaChi`='$diachi' WHERE makh= '$makh'";
        if (mysqli_query($connect,$sql)){
            echo "Cập nhật dữ liệu thành công";
        } else {
            echo ("Error: " . mysqli_error($connect));
        }
    }
    // Đóng database
    mysqli_close ($connect);
?>