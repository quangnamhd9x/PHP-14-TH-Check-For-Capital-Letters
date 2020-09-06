<?php

function isFirstLeetterUpperCase($str){
    $regexp = '/^[A-Z]/';
    if (preg_match($regexp, $str)){
        echo ("Chu dau la chu in hoa");
    } else {
        echo ("Chu dau khong phai la chu in hoa");
    }
}

echo isFirstLeetterUpperCase('Codegym');
echo "<br>";
echo isFirstLeetterUpperCase('codegym');