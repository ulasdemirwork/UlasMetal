<?php 
include 'nedmin/netting/process.php';
$ayarsor = $db->prepare("SELECT * FROM site_ayar");
$ayarsor->execute();

$ayarcek = $ayarsor->fetch(PDO::FETCH_ASSOC);


$footerayarsor = $db->prepare("SELECT * FROM footer");
$footerayarsor->execute();

$footerayarcek = $footerayarsor->fetch(PDO::FETCH_ASSOC);


$iletisimsor = $db->prepare("SELECT * FROM iletisim_ayar");
$iletisimsor->execute();

$iletisim_cek = $iletisimsor->fetch(PDO::FETCH_ASSOC);
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $ayarcek['ayar_description'] ?>">
    <meta name="keywords" content="<?php echo $ayarcek['ayar_keywords'] ?>">
    <meta name="author" content="<?php echo $ayarcek['ayar_author'] ?>">
    <!-- İcon -->
    <link rel="icon" href="<?php echo $ayarcek['icon_resimyol'] ?>" type="image/icon type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
    <title><?php echo $ayarcek['ayar_title'] ?></title>
    <!-- Bootstrap cdn -->
    <title>Ulaş Metal</title>
    <style>

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white  sticky-top  border-bottom">
        <div class="container mt-1 p-1" style="max-width: 1010px;">
            <h3>Ulaş Metal</h3>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="hurda-fiyatlari.php">Hurda Fiyatları</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hakkimizda.php">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="iletisim.php">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>