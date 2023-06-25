<?php

include("cvovi.php");

foreach($cv as $s){
    
    $stara_fotka = $s["fotka"];
    $kod = $s["ime"] . " " . $s["prezime"]; //nije kod ali tako je lakše
    
    $kod = str_replace("č", "c", $kod);
    $kod = str_replace("ć", "c", $kod);
    $kod = str_replace("š", "s", $kod);
    $kod = str_replace("ž", "z", $kod);
    $kod = str_replace("đ", "d", $kod);
    $kod = str_replace("Č", "C", $kod);
    $kod = str_replace("Ć", "C", $kod);
    $kod = str_replace("Š", "S", $kod);
    $kod = str_replace("Ž", "Z", $kod);
    $kod = str_replace("Đ", "D", $kod);
    $kod = str_replace(" ", "_", $kod);
    $kod = str_replace("-", "_", $kod);
    
    $datoteka = strtolower($kod);

    $ext_arr = explode(".", $stara_fotka);
    $ext = $ext_arr[1];
//    if(copy("fotke/".$stara_fotka, "kopija/".$datoteka.".".$ext)){
//        echo $datoteka.".".$ext ."<br>";
//    }else{
//        echo $datoteka.".".$ext . " - fail<br>";
//    }
}


?>