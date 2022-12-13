<!DOCTYPE html>
    <html>
        <head>
            <title>Cửa hàng MIS</title>
            <meta charset="utf-8" http-equiv="content-type">
            <script src="jquery-3.6.1.min.js"></script>
            <script src="bootstrap-5.2.3-dist\bootstrap-5.2.3-dist\js\bootstrap.min.js"></script>
            <link rel="stylesheet" href="bootstrap-5.2.3-dist\bootstrap-5.2.3-dist\css\bootstrap.min.css">
        </head>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "mis_cua_hang";

            // create new connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            mysqli_query($conn, 'set names utf8');

            // check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM `mis_loai_hang`";

            $ketQuaTruyVan =  $conn->query($sql);

            if ($ketQuaTruyVan->num_rows > 0) {
                while ($loaihang = $ketQuaTruyVan->fetch_assoc()) {
                    var_dump($loaihang); 
                    // echo gettype($loaihang);
                    echo"<br>";
                }
            }
        ?>
</html>


