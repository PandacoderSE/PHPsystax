<?php
//Đỗ Mạnh Quang1. Tính toán tổng hai số:
//Tạo form HTML với hai trường nhập số và nút submit.
//Sử dụng method GET hoặc POST để gửi dữ liệu form đến một file PHP khác.
//Xử lý dữ liệu form trong file PHP, bao gồm:
//Lấy giá trị hai số từ biến $_GET hoặc $_POST.
//Tính toán tổng hai số.
//Hiển thị kết quả tính toán trên trang web.
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $so1=$_POST["so1"] ;
    $so2=$_POST["so2"] ;
    //kiemr tra tên tài khoản 
    $tong=$so1 + $so2 ; 
    echo "Tổng :".$so1."+".$so2." = ".$tong;
}