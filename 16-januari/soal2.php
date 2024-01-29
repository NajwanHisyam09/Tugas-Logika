<?php
 
 $angka = 7;

 if($angka === '7'){
    echo   "merupakan string";
 }else {
    echo "merupakan numeric";
 }

 
 $angka = 22;

 if(is_string($angka)){
    echo  "\"$angka\" merupakan string";
 }else{
    echo "$angka merupakan numeric";
 }

// dapat point 3

