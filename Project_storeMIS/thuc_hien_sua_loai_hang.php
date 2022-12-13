<?php 
$tenLoaiHang = $_POST['ten_loai_hang'];
$moTa = $_POST['mo_ta'];
$id = $_POST['id'];

// -------------------------------- Kết nối CSDL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mis_cua_hang";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn,'set names utf8'); // Hiển thị dữ liệu tiếng Việt (ko cần thiết lắm)

// Kiểm tra
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `mis_loai_hang` 
        SET `ten_loai_hang` = '". $tenLoaiHang ."', `mo_ta` = '". $moTa ."' 
        WHERE `mis_loai_hang`.`id` = ".$id;

if ($conn->query($sql)) {
    echo "Sửa mới thành công";
}
else{
    echo "Không sửa mới được";
}
?>