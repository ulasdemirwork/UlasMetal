<?php 
ob_start();
session_start();
include 'connection.php';

if (isset($_POST['adminlogin'])) {

    $kullanici_mail =  htmlspecialchars($_POST['kullanici_mail']);
    $kullanici_password = md5($_POST['kullanici_password']);

    $kullanicisor = $db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:passwordd and kullanici_yetki=:yetki");
    $kullanicisor->execute(array(

        'yetki' => 5,
        'mail' => $kullanici_mail,
        'passwordd' => md5($kullanici_password)
    ));
    $say = $kullanicisor->rowCount();
    if ($say == 1) {

        $_SESSION['kullanici_mail'] = $kullanici_mail;
        header("location:../production/index.php?durum=ok");
    } else {
        header("location:../production/login.php?durum=no");
    }
}



if (isset($_POST['siteayarguncelle'])) {

    $uploads_dir = '../../dimg/icon';
    @$tmp_name = $_FILES['icon_resimyol']["tmp_name"];
    @$name = $_FILES['icon_resimyol']["name"];
    //resmin isminin benzersiz olması
    $benzersizsayi1 = rand(20000, 32000);
    $benzersizsayi2 = rand(20000, 32000);
    $benzersizsayi3 = rand(20000, 32000);
    $benzersizsayi4 = rand(20000, 32000);
    $benzersizad = $benzersizsayi1 . $benzersizsayi2 . $benzersizsayi3 . $benzersizsayi4;
    $refimgyol = substr($uploads_dir, 6) . "/" . $benzersizad . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");



    $kaydet = $db->prepare("UPDATE site_ayar SET
		ayar_title=:ayar_title,
		ayar_keywords=:ayar_keywords,
        ayar_description=:ayar_description,
		icon_resimyol=:icon_resimyol,
        ayar_author=:ayar_author
		");
    $insert = $kaydet->execute(array(
        'ayar_title' => $_POST['ayar_title'],
        'ayar_keywords' => $_POST['ayar_keywords'],
        'ayar_description' => $_POST['ayar_description'],
        'icon_resimyol' => $refimgyol,
        'ayar_author' => $_POST['ayar_author']
    ));
    if ($insert) {
        Header("Location:../production/site-ayar.php?durum=ok");
    } else {

        Header("Location:../production/site-ayar.php?durum=no");
    }
}


if(isset($_POST['iletisimayarguncelle'])){


    $kaydet = $db->prepare("UPDATE iletisim_ayar SET
		iletisim_email=:iletisim_email,
        iletisim_tel=:iletisim_tel,
        iletisim_tel2=:iletisim_tel2,
		iletisim_tel3=:iletisim_tel3,
        iletisim_hizmet_bolgesi=:iletisim_hizmet_bolgesi,
        iletisim_wp=:iletisim_wp,
        iletisim_telara=:iletisim_telara	
		");
    $insert = $kaydet->execute(array(
        'iletisim_email' => $_POST['iletisim_email'],
        'iletisim_tel' => $_POST['iletisim_tel'],
        'iletisim_tel2' => $_POST['iletisim_tel2'],
        'iletisim_tel3' => $_POST['iletisim_tel3'],
        'iletisim_hizmet_bolgesi' => $_POST['iletisim_hizmet_bolgesi'],
        'iletisim_wp' => $_POST['iletisim_wp'],
        'iletisim_telara' => $_POST['iletisim_telara']
    ));
    if ($insert) {
        Header("Location:../production/iletisim-ayar.php?durum=ok");
    } else {

        Header("Location:../production/iletisim-ayar.php?durum=no");
    }
}

if (isset($_POST['footerayarguncelle'])) {

    $ayarguncelle = $db->prepare("UPDATE footer SET
    footer_facebook=:footer_facebook,
    footer_twitter=:footer_twitter,
    footer_youtube=:footer_youtube,
    footer_instagram=:footer_instagram,
    footer_aciklama=:footer_aciklama,
    footer_li_1=:footer_li_1,
    footer_li_2=:footer_li_2,
    footer_li_3=:footer_li_3,
    footer_li_4=:footer_li_4
    ");
    $update = $ayarguncelle->execute(array(
        'footer_facebook' => $_POST['footer_facebook'],
        'footer_twitter' => $_POST['footer_twitter'],
        'footer_youtube' => $_POST['footer_youtube'],
        'footer_instagram' => $_POST['footer_instagram'],
        'footer_aciklama' => $_POST['footer_aciklama'],
        'footer_li_1' => $_POST['footer_li_1'],
        'footer_li_2' => $_POST['footer_li_2'],
        'footer_li_3' => $_POST['footer_li_3'],
        'footer_li_4' => $_POST['footer_li_4']
    ));
    if ($update) {
        header("location:../production/footer-ayar.php?durum=ok");
    } else {
        header("location:../produciton/footer-ayar.php?durum=no");
    }
}


?>