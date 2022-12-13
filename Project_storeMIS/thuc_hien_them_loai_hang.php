<?php
// Nhận dữ liệu gửi từ Form them_loai_hang.php
$tenLoaiHang = $_POST['ten_loai_hang'];
$moTa = $_POST['mo_ta'];

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

// ----------------------------------- Lệnh thêm
$sql = "insert into `mis_loai_hang`(`ten_loai_hang`, `mo_ta`)
        values ('" . $tenLoaiHang . "', '" . $moTa . "')";
if($conn->query($sql)) {
    echo "Thêm mới thành công";
}
else {
    echo "Không thêm mới được";
}
?>