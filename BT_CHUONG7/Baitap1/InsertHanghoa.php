<?php
    $servername ="localhost";
    $database = "quanlybanhang";
    $username = "root";
    $password = "";

    // ket noi databse sinh vien
    $connect = mysqli_connect($server, $username, $password, $dbname);
    //neu ket noi bi loi thi xuat bao loi va thoat

    if(!$connect){
        die("Không kết nối:" .mysqli_connect_error());
        exit();
    }

    //khai bao gia tri ban dau
    $mahang ="";
    $tenhang ="";
    $mansx ="";
    $namsx ="";
    $gia="";

    //lay gia tri submit
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['txtMahang'])){
            $mahang =$_POST['txtMahang'];
        }
        if(isset($_POST["txtTenhang"])){
            $tenhang =$_POST['txtTenhang'];
        }
        if(isset($_POST["txtManhasx"])){
            $mansx =$_POST['txtManhasx'];
        }
        if(isset($_POST["intNam"])){
            $namsx =$_POST['intNam'];
        }
        if(isset($_POST["intGiaban"])){
            $gia =$_POST['intGiaban'];
        }
    }
    // xử lý, update dư lieu trong tabke danhsach
    $sql="INSERT INTO danhsach (mahang, tenhang, manhasx, namsx, gia)
    VALUES ('$msv','$hoten','$nganhhoc','$tongdiem')";
    if(mysqli_query($connect,$sql)){
        echo "Thêm dữ liệu thành công";
    }else{
            echo "Error:" .$sql. "<br>" .mysqli_error($connect);
    }
    
    mysqli_close($connect);
?>