<?php
session_start();

$menu = [
    [ "link" => "index.php", "butonAdi" => "Yenilenebilir Enerji" ],
    [ "link" => "enerjikaynakları.php", "butonAdi" => "Yenilenebilir Enerji Kaynakları" ],
];

$veriler = [
    "menu" => array_merge($menu),
    "altkisim" => " "
];
