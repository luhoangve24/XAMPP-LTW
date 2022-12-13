<?php
    $tenMatHang = $_POST['ten_mat_hang'];
    $moTa = $_POST['mo_ta'];
    $hinhAnh = $_POST['hinh_anh'];
    $giaBan = $_POST['gia_ban'];
    $loaiHang = $_POST['loai_hang'];

    require("ket_noi_csdl.php");

    $sql = "insert into `mis_mat_hang`(`ten_mat_hang`, `mo_ta`, `hinh_anh`, `gia_ban`, `loai_hang_id`)
            values('". $tenMatHang ."','". $moTa ."','". $hinhAnh ."','". $giaBan ."','". $loaiHang ."')";

    if ($conn->query($sql)) {
        echo "Thêm mới thành công";
        echo "
            <script>
                window.location = 'danh_sach_mat_hang.php';
            </script>";
    }
    else {
        echo "Không thêm được";
        echo "
        <script>
            window.location = 'danh_sach_mat_hang.php';
        </script>";
    }
?>