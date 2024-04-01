<?php
include_once "tong.php" ; 
//import file khác vô lấy class sum để dùng tính tổng 
$bientoancuc=100 ; 
if(function_exists('sum')){
    //hàm funtion_exist kiêm rtra hàm tồn tại hay chưa
        echo sum(5,10) ;  
    
}
function luythua($c){
    global $bientoancuc;
    echo 'Biến toàn cục'.$bientoancuc ; 
}
luythua(15);
//biến toàn cục bên trong hàm thì phải khai báo là global
//format code = ctrl + alt + f
//Hàm insset và hàm empty() : trong php 