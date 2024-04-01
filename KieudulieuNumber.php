<?php
//kiểm tra kiểu số 
//is_numberic() : kiểm tra kiểu số (số nguyên và số thực )
$b= 'NN' ; 
$res= is_numeric($b);
var_dump($res);
//is_int() : kiểm tả nguyên tương tự is_float
//ép kiểu số nguyên , số thực cũng tương tự
$bien1=32.56 ; 
$bien2 = (int)$bien1 ;
var_dump($bien2) ; 
// hàm làm tròn : round(biên, numble sau dấu , ) 
$bien3 = 1.2344242423432423423423; 
$kq= round($bien3,5) ;  
var_dump($kq) ;