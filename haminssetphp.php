<?php
//$bien1= "manh";
// bật cảnh báo lỗi 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
if(isset($bien1)){
    echo $bien1 ; 
}
//hàm empty() : kiểm tra rỗng ; 
$chuoi= 'ak' ; 
if(!empty($chuoi)){
    echo '<br>'.'không rống '.$chuoi ; 
}else{
    echo 'Rỗng' ; 
}