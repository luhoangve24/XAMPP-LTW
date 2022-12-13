<?php
$tenDangNhap = $_POST['ten_dang_nhap'];
$eMail = $_POST['email'];
$matKhau = $_POST['mat_khau'];
$matKhauCheck = $_POST['mat_khau_check'];

require("ket_noi_csdl.php");

$encrypted_matKhau = md5($matKhau);
$sql = "INSERT INTO `mis_nguoi_dung`(`ten_nguoi_dung`, `mat_khau`, `email`, `admin`)
VALUES('".$tenDangNhap."', '".$encrypted_matKhau."', '".$eMail."', )";

if ($conn->query($sql)) {
    echo "Đăng ký thành công";
    echo "
    <script></script>"
}
;
?>