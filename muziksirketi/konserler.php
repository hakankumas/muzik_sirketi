<?php
include("baglan.php");
$sorgu = $db->prepare('SELECT * FROM illerinhasilatverileri');
$sorgu->execute();
$konserbilgisilist = $sorgu->fetchAll(PDO::FETCH_OBJ);

?>



<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Music is Life</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawVisualization);

        function drawVisualization() {
            // Some raw data (not necessarily accurate)
            var data = google.visualization.arrayToDataTable([
            ['İl Adı', 'Ortalama Fiyat'],
            <?php
            $sql ="SELECT * FROM illerinortalamabiletfiyatlari";
            $fire = mysqli_query($con,$sql);
            while ($result = mysqli_fetch_assoc($fire)){
                echo"['".$result['il_ad']."',".$result['ortalamabiletfiyat']."],";
            }

            ?>
            ]);

            var options = {
            title : '',
            vAxis: {title: 'Ortalama Bilet Fiyatı'},
            hAxis: {title: 'İl Adı'},
            seriesType: 'bars',
            series: {5: {type: 'line'}}
            };

            var chart = new google.visualization.ComboChart(document.getElementById('chart_div1'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="menu-title">YÖNETİCİ PANELİ</li>
                    <li class="active">
                        <a href="index.php"><i class="menu-icon fa fa-tachometer"></i>Ana Sayfa</a>
                    </li>
                    <li>
                        <a href="sanatcilar.php"> <i class="menu-icon fa fa-music"></i>Sanatçılar</a>
                    </li>
                    <li>
                        <a href="sponsorlar.php"> <i class="menu-icon fa fa-handshake-o"></i>Sponsorlar</a>
                    </li>
                    <li>
                        <a href="konserler.php"> <i class="menu-icon fa fa-volume-up"></i>Konserler</a>
                    </li>
                    <li>
                        <a href="yenikonser.php"> <i class="menu-icon fa fa-plus"></i>Yeni Konser Planı Ekle</a>
                    </li>
                    <li>
                        <a href="iller.php"> <i class="menu-icon fa fa-bars"></i>İller</a>
                    </li>
                    <li>
                        <a href="musteriler.php"> <i class="menu-icon fa fa-users"></i>Müşteriler</a>
                    </li>
                    <li>
                        <a href="maliyethesapla.php"> <i class="menu-icon fa fa-calculator"></i>Maliyet Hesapla</a>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>
    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/musicislife.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                            </button>
                        </div>
                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                            </button>
                        </div>
                    </div>
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.png" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="login.php"><i class="fa fa-power -off"></i>Çıkış Yap</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-header">
                                <strong class="card-title">İLLERİN ORTALAMA BİLET FİYATLARI</strong>
                            </div>
                        <div id="chart_div1" style="width: auto; height: 600px;"></div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">KONSERLER</strong>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>İl Adı</th>
                                            <th>Konser Sayısı</th>
                                            <th>Satılan Bilet Adedi</th>
                                            <th>Toplam Hasılat</th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($konserbilgisilist as $kbl){?>
                                    <tbody>
                                        <tr>
                                            <td><?= $kbl->il_ad ?></td>
                                            <td><?= $kbl->konsersayisi ?></td>
                                            <td><?= $kbl->satilanbiletadedi ?></td>
                                            <td><?= $kbl->toplamkonserhasilati ?></td>
                                        </tr>
                                    </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2023 DEU YBS
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://ybs.deu.edu.tr">DEU YBS</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>
</body>
</html>
