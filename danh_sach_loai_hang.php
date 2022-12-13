
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

// Truy vấn

$sql = "select * from mis_loai_hang";

$ketQuaTruyVan = $conn->query($sql);

// Duyệt và hiển thị: Dùng hàm vardump() để hiển thị kết quả dạng mảng, var_dump() sẽ in ra bất kể biến mang dạng gì

if ($ketQuaTruyVan->num_rows > 0) {
    while ($loaiHang = $ketQuaTruyVan->fetch_assoc()) { // fetch_assoc: trả tất cả các kết quả thành 1 mảng kết hợp mà chúng ta có thể lặp qua 
        var_dump ($loaiHang); 
        echo "<br />";
    }
}
?>


