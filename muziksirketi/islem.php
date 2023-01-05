<?php
include("baglan.php");
$baglanti = mysqli_connect("127.0.0.1","root","");
mysqli_select_db($baglanti,"muzik");


if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE username = '$username' and password ='$password'";
    
    $sorgu = mysqli_query($baglanti, $sql);
    $dizi = mysqli_fetch_array($sorgu);
    
    if($dizi!=0){
        header("location:index.php");
    }else{
        echo "Yanlış Kimlik Bilgisi Girdiniz!</br>";
        echo "Lütfen Giriş Bilgilerinizi Kontrol Ediniz.</br>";
        echo "Giriş Ekranına Yönlendiriliyorsunuz...";
        header('Refresh:5; login.php');
    }    

}


if(isset($_POST['yenikonserekle'])){
    $konseradi = $_POST["konseradi"];
    $iladi = $_POST["iladi"];
    $sanatciadi = $_POST["sanatciadi"];
    $yasaraligi = $_POST["yasaraligi"];
    $biletfiyati = $_POST["biletfiyati"];
    $kapasite = $_POST["kapasite"];
    $konsertarihi = $_POST["konsertarihi"];

    $sorgu = $db->prepare("INSERT INTO yenikonser SET yenikonser_ad=?, il_id =?, sanatci_id =?, yas_araligi_id =?, bilet_fiyati =?, kapasite =?, konser_tarihi =?");
    $ekle = $sorgu->execute([
        $konseradi, $iladi, $sanatciadi, $yasaraligi, $biletfiyati, $kapasite, $konsertarihi
    ]);
    if($ekle){
        echo"Kayıt Başarıyla Gerçekleştirildi.<br>Yönlendiriliyorsunuz... ";
        header('Refresh:2; yenikonser.php');
    }else{
        echo "Bir Hata Oluştu. Tekrar Deneyiniz...";
    }
}

?>