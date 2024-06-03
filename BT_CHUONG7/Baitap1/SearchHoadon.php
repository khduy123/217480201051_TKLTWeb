<?php
    $servername ="localhost";
    $database = "quanlybanhang";
    $username = "root";
    $password = "";

    //Kết nối database quanlybanhang
    $connect = mysqli_connect($servername, $username,$password,$database);

    //Nếu kết nối bị lỗi thì xuất báo lỗi và thoát
    if(!$connect){
        die("Không kết nối:".mysqli_connect_error());
        exit();
    }
    //Khai báo giá trị ban đầu, khi chưa submit câu lệnh Select sẽ báo lỗi
    $mahoadon="";

    // Lấy giá trị POST từ form vừa submit
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["Mahoadon"])){
            $mahoadon =$_POST['Mahoadon'];
    }

    //Xử lý, Browse dữ liệu trong table danhsach
    $sql= "select distinct k.makh, tenkh from khachhang as k, hoadon as h WHERE k.MaKH = h.MaKH AND MaHD = '$mahoadon'";
        if($result=mysqli_query($connect,$sql)){
            if(mysqli_num_rows($result)>0){
                while ($row=mysqli_fetch_array($result)){
                    echo $row['makh'];
                    echo $row['tenkh'];
                }
                //Giải phóng bộ nhớ của biến
                mysqli_free_result($result);
            }
            else
            {
                echo "No Records";
            }
        }
    }
    // Đóng kết nối database
    mysqli_close($connect);
    
?>