<?php
include("baglan.php");

$query1 = "SELECT * FROM toplamkonsersay";
$query2 = "SELECT * FROM toplamsanatcisay";
$query3 = "SELECT * FROM toplamsponsorsay";
$query4 = "SELECT * FROM toplamhasilat";
$query5 = "SELECT * FROM satilanbiletadedisay";
$query6 = "SELECT * FROM musterikaybisay";

$result1 = mysqli_query($connect, $query1);
$result2 = mysqli_query($connect, $query2);
$result3 = mysqli_query($connect, $query3);
$result4 = mysqli_query($connect, $query4);
$result5 = mysqli_query($connect, $query5);
$result6 = mysqli_query($connect, $query6);

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
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
    <style type="text/css">
        footer { position: absolute; bottom: 0; width: 100%; height: 60px; background-color: #f5f5f5; }
    </style>
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
        <div class="content mt-5">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-5 col-md-8 ml-5 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-volume"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span>
                                                <?php while($row1 = mysqli_fetch_array($result1)):;?>
                                                <?php echo $row1[0];?>
                                                <?php endwhile;?>
                                            </span></div>
                                            <div class="stat-heading">Konser</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8 ml-5 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span>
                                                <?php while($row2 = mysqli_fetch_array($result2)):;?>
                                                <?php echo $row2[0];?>
                                                <?php endwhile;?>
                                            </span></div>
                                            <div class="stat-heading">Sanatçı</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8 ml-5 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-portfolio"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span>
                                                <?php while($row3 = mysqli_fetch_array($result3)):;?>
                                                <?php echo $row3[0];?>
                                                <?php endwhile;?>
                                            </span></div>
                                            <div class="stat-heading">Sponsor</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8 ml-5 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text">₺<span>
                                                <?php while($row4 = mysqli_fetch_array($result4)):;?>
                                                <?php echo $row4[0];?>
                                                <?php endwhile;?>
                                            </span></div>
                                            <div class="stat-heading">Toplam Kazanç</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8 ml-5 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-graph1"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span>
                                                <?php while($row5 = mysqli_fetch_array($result5)):;?>
                                                <?php echo $row5[0];?>
                                                <?php endwhile;?>
                                            </span></div>
                                            <div class="stat-heading">Satılan Bilet Adedi</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8 ml-5 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-close-circle"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span>
                                                <?php while($row6 = mysqli_fetch_array($result6)):;?>
                                                <?php echo $row6[0];?>
                                                <?php endwhile;?>
                                            </span></div>
                                            <div class="stat-heading">Kayıp Müşteri Sayısı</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
</body>
</html>
