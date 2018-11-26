<?php

//関数を定義 全部 a=　〇年〇月〇日　〇時〇分〇秒
//               b=  〇年〇月〇日 
//               c=　〇時〇分〇秒

function a(){
    echo date("Y年m月d日　H時i分s秒")."<br>";
}

function b(){
    echo date("Y年m月d日")."<br>";
}

function c(){
    echo date("H時i分s秒")."<br>";
}

a();
b();
c();



?>