<?php
$id = $_GET['id'];

require("ket_noi_csdl.php");

$sql = "select * from mis_mat_hang where id = " . $id;

$ketQuaTruyVan = $conn->query($sql);

if ($ketQuaTruyVan->num_rows > 0) {
    while ($matHang = $ketQuaTruyVan->fetch_assoc()) {
        $tenMatHang = $matHang['ten_mat_hang'];
        $moTa = $matHang['mo_ta'];
        $hinhAnh = $matHang['hinh_anh'];
        $giaBan = $matHang['gia_ban'];
        $loaiHang = $matHang['loai_hang_id'];
    }
}
?>

<html>
    <head>
        <title>Sửa loại hàng</title>
    </head>
    <body> 
        <h1>Sửa loại hàng</h1>
        <form method="post" action="thuc_hien_sua_mat_hang.php">
            <label>Tên mặt hàng</label>
            <input type="text" name="ten_mat_hang" value="<?php echo $tenMatHang;?>">
            <br>
            <label>Mô tả</label>
            <input type="textarea" name="mo_ta" value="<?php echo $moTa;?>">
            <br>
            <label>Hình ảnh</label>
            <input type="text" name="hinh_anh" value="<?php echo $hinhAnh;?>">
            <br>
            <label>Giá bán</label>
            <input type="number" name="gia_ban" value="<?php echo $giaBan;?>">
            <br>
            <label>Loại hàng</label>
            <select name="loai_hang">
                <?php 
                require("ket_noi_csdl.php");
                $sql = "select id, ten_loai_hang
                        from mis_loai_hang";
                $ketQuaTruyVan = $conn->query($sql);
                if ($ketQuaTruyVan->num_rows > 0) {
                    while ($matHang = $ketQuaTruyVan->fetch_assoc()) {
                        if ($matHang['id'] == $loaiHang) {
                ?>
                        <option value="<?php echo($matHang['id']);?>" selected="selected"><?php echo $matHang['ten_loai_hang']; ?></option>

                <?php
                        }
                        else {
                ?>
                         <option value="<?php echo($matHang['id']);?>"><?php echo $matHang['ten_loai_hang']; ?></option>
                <?php
                        }

                    }
                }
                ?>
            </select>
            <br>
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <br>
            <input type="submit" value="Lưu">
        </form>
    </body>
</html>