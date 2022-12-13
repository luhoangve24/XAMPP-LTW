<?php
$tenMatHang = $_POST['ten_mat_hang'];
$moTa = $_POST['mo_ta'];
$hinhAnh = $_POST['hinh_anh'];
$giaBan = $_POST['gia_ban'];
$loaiHang = $_POST['loai_hang'];
$idMatHang = $_POST['id'];
require("ket_noi_csdl.php");

$sql = "UPDATE `mis_mat_hang`
        SET `ten_mat_hang` = '" . $tenMatHang . "',
        `mo_ta` = '" . $moTa . "',
        `hinh_anh` = '" . $hinhAnh . "',
        `gia_ban` = '" . $giaBan . "',
        `loai_hang_id` = '" . $loaiHang . "'
        where `id` = " . $idMatHang;
echo $sql;
if ($conn->query($sql)) {
    echo "Sửa thành công";
    echo ("
    <script>
    window.location = 'danh_sach_mat_hang.php';
    </script>
    ");
}
else {
    echo "Không sửa được";
    echo "
        <script>
        window.location = 'danh_sach_mat_hang.php';
        </script>
    ";

}
?>