<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=yagiz-metal;charset=utf8", 'root', '');
    // echo "Veritabanı bağlantım başarılı";
} catch (PDOException  $e) {
    echo $e->getMessage();
}
