<?php
if(isset($_GET["yenikonserid"])){
    include("baglan.php");
    $sorgu = $db->prepare('DELETE FROM yenikonser WHERE yenikonser_id=?');
    $sonuc = $sorgu->execute([$_GET['yenikonserid']]);
    if($sonuc){
        header("Location:yenikonser.php");
    }else{
        echo 0;
    }
}

?>