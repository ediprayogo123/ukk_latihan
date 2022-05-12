<?php
session_start();
$nik = $_SESSION['nik'];
$nama = $_SESSION['nama'];
$page = $_GET['page'];
if (!empty($_SESSION['nik'])) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bs/css/bootstrap.css">
        <link rel="stylesheet" href="data_table/datatable.css">
        <title>Document</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mt-5">
                    <?php include "navigasi.php"; ?>
                </div>
                <div class="col-lg-9 mt-5">
                    <?php
                    if ($page == 'isi_data') {
                        include "isi_data.php";
                    } elseif ($page == 'home' || empty($page)) {
                        include "home.php";
                    } elseif ($page == 'catatan_perjalanan') {
                        include "catatan_perjalanan.php";
                    } elseif ($page == 'logout') {
                        unset($_SESSION['nik']);
                        unset($_SESSION['nama']);
                        header("location:login.php");
                    }
                    ?>
                </div>
            </div>
        </div>
        <script src="jquery/jquery3-6-0.js"></script>
        <script src="bs/js/bootstrap.js"></script>
        <script src="data_table/datatable.bootstrap.js"></script>
        <script src="data_table/jquery.datatable.js"></script>
        <script src="data_table/main.js"></script>
    </body>

    </html>
<?php
} else {
    header("location:login.php");
}
?>