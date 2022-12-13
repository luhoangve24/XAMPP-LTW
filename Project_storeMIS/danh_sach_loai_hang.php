<?php
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
?>
<html>
    <head>
        <title>Danh sách loại hàng</title>
        <meta charset="utf-8" http-equiv="content-type">
        <script src="jquery-3.6.1.min.js"></script>
        <script src="bootstrap-5.2.3-dist\bootstrap-5.2.3-dist\js\bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap-5.2.3-dist\bootstrap-5.2.3-dist\css\bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>STT</th>
                    <th>Tên loại hàng</th>
                    <th>Thao tác</th>
                </tr>
                <!-- Truy vấn -->
                <?php
                $sql = "select * from mis_loai_hang";

                $ketQuaTruyVan = $conn->query($sql);

                if ($ketQuaTruyVan->num_rows > 0) {
                    $i = 1;
                    while ($loaiHang = $ketQuaTruyVan->fetch_assoc()) { // fetch_assoc: trả tất cả các kết quả thành 1 mảng kết hợp mà chúng ta có thể lặp qua 
                ?>   
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $loaiHang['ten_loai_hang']; ?></td>  
                        <td>
                            <a class="btn btn-info" href="sua_loai_hang.php?id=<?php echo $loaiHang['id'];?>">Sửa</a>
                            <a class="btn btn-danger" href="xoa_loai_hang.php?id=<?php echo $loaiHang['id'];?>">Xóa</a>
                        </td>
                    </tr> 
                <?php
                        $i++;
                    }
                }
                ?>
                    <tr>
                        <td colspan="3"><a class="btn btn-success" href="them_loai_hang.php">Thêm mới</a></td>
                    </tr>
            </table>
        </div>
    </body>
</html>