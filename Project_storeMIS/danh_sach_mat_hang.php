<!DOCTYPE html>
<html>
    <head>
        <title>Danh sách mặt hàng</title>
        <meta charset="utf-8" http-equiv="content-type">
        <script src="jquery-3.6.1.min.js"></script>
        <script src="bootstrap-5.2.3-dist\bootstrap-5.2.3-dist\js\bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap-5.2.3-dist\bootstrap-5.2.3-dist\css\bootstrap.min.css">
    </head>
    <body>
        <?php 
        require("ket_noi_csdl.php");
        $sql = "select mh.id, mh.ten_mat_hang, lh.ten_loai_hang 
                from mis_mat_hang as mh
                inner join mis_loai_hang as lh
                on mh.loai_hang_id = lh.id
                order by mh.loai_hang_id";
        $ketQuaTruyVan = $conn->query($sql);
        ?>
        <div class="container">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Tên mặt hàng</th>
                    <th>Nhóm</th>
                    <th>Thao tác</th>
                </tr>
                <?php
                if ($ketQuaTruyVan->num_rows > 0) {
                    while ($matHang = $ketQuaTruyVan->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $matHang['id']; ?></td>
                    <td><?php echo $matHang['ten_mat_hang']; ?></td>
                    <td><?php echo $matHang['ten_loai_hang']; ?></td>
                    <td> 
                        <a class="btn btn-info" href="sua_mat_hang.php?id=<?php echo $matHang['id']; ?>">Sửa</a>
                        <a class="btn btn-danger" href="xoa_mat_hang.php?id=<?php echo $matHang['id']; ?>">Xóa</a>
                    </td>
                </tr>
                <?php
                    }
                };
                ?>
            </table>
            <a class="btn btn-success" href="them_mat_hang.php">Thêm mặt hàng</a>
        </div>
    </body>
</html>