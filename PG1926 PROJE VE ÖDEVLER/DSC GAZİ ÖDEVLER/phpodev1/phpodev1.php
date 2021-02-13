<?php

$h = date("H");

if($h == "6 - 10") {
    echo "Günaydın";
}
elseif($h == "10 - 17") {
    echo "İyi Günler";
}
elseif($h == "17 - 20") {
    echo "iyi Akşamlar";
}
elseif($h == "20 - 0") {
    echo "İyi Geceler";
}
else{
    echo "Esenlikler Dilerim";
}

?>