<?php
//SESSION ám chỉ 1 phiên làm việc , đc lưu trên server
//khi trình duyệt đóng , nó sẽ bị hủy
//để khởi tạo seesion , thì chạy seeion_start() , và cú pháp tạo giống cookie 
session_start();
//khởi tạp session 
$_SESSION['username'] = 'manhnv';
$_SESSION['usern'] = 'panda';
$_SESSION['login'] = 'vũ trụ';
unset($_SESSION['login']);
echo '<pre>';
print_r($_SESSION['username']);
echo '</pre>';
echo '<pre>';
print_r($_SESSION['usern']);
echo '</pre>';
echo '<pre>';
print_r($_SESSION['login']);
echo '</pre>';
// sửa thì chỉ cần thay nội dung là đc.
//để xóa session thì dùng unset()
//xóa nhiều session dùng session_destroy ; 
$cart=[] ; 
array_push($cart,"lemon","t-shirt") ; 
$_SESSION["cart"]=$cart ; 
echo "Session varible :".count( $_SESSION['cart'] )."";
echo "List Product in Cart ";
foreach( $_SESSION["cart"] as $k){
    echo "cart ".$k."</br>" ; 
}


