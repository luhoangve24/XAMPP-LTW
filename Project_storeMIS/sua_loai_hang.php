<?php 
$id = $_GET['id'];

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

$sql = "select * from `mis_loai_hang` where id = " . $id;

$ketQuaTruyVan = $conn->query($sql);

if ($ketQuaTruyVan->num_rows > 0) {
    while($loaiHang = $ketQuaTruyVan->fetch_assoc()) {
        $tenLoaiHang = $loaiHang['ten_loai_hang'];
        $moTa = $loaiHang['mo_ta'];
    }
}
?>

<html>
    <head>
        <title>Sửa loại hàng</title>
    </head>
    <body>
        <h2>Sửa loại hàng</h2>
        <form action="thuc_hien_sua_loai_hang.php" method="post" >
            <label>Tên loại hàng</label>
            <input type="text" name="ten_loai_hang" value="<?php echo $tenLoaiHang;?>">
            <br>
            <labe>Mô tả</label>
            <input type="text" name="mo_ta" value="<?php echo $moTa;?>">
            <br>
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <input type="submit" value="Lưu">
        </form>
    </body>
</html>