<html>
    <head>
        <title>Thêm mặt hàng</title>
        <meta charset="utf-8" http-equiv="content-type">
        <script src="jquery-3.6.1.min.js"></script>
        <script src="bootstrap-5.2.3-dist\bootstrap-5.2.3-dist\js\bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap-5.2.3-dist\bootstrap-5.2.3-dist\css\bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Thêm mặt hàng</h1>
            <form method="post" action="thuc_hien_them_mat_hang.php">
                <label>Tên mặt hàng</label>
                <input type="text" name="ten_mat_hang">
                <br>
                <label>Mô tả</label>
                <input type="textarea" name="mo_ta">
                <br>
                <label>Hình ảnh</label>
                <input type="text" name="hinh_anh">
                <br>
                <label>Giá bán</label>
                <input type="number" name="gia_ban">
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
                    ?> 
                            <option value="<?php echo($matHang['id']);?>"><?php echo $matHang['ten_loai_hang']; ?></option>
                    <?php
                        }
                    };
                    ?>
                </select>
                <br>
                <input type="submit" value="Lưu">          
            </form>
        </div>
    </body>
</html>