<?php
$id = $_GET['id'];

require("ket_noi_csdl.php");

$sql = "DELETE FROM mis_loai_hang 
        WHERE `mis_loai_hang`.`id` = " . $id;

if ($conn-> query($sql)) {
    echo "Xóa thành công";
}
else
{
    echo "Không xóa được";
}
?>