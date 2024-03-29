<?php
//cú pháp của chuỗi : $tenbien= '' hoặc ""
//ghi gõ lệnh của php . Thì phải mở lệnh php , khi gói html thì phải đóng thẻ php
$chuoi1='Nguyễn Văn Mạnh' ;
var_dump($chuoi1) ;  
echo $chuoi1 ; 
echo '<br>' ; 
echo "Nguyên \"Văn\" Mạnh $chuoi1";
// ko cần nối biến nếu là nháy kép 
// còn nháy đơn thì nối bth
//hàm cắt chuỗi , explode : căt chuooit và lưu vô các mảng 
$ch2='Học | Văn | manh' ; 
$arr = explode('|',$ch2) ; 
echo '<br>';
var_dump($arr) ; 
//Hàm xử lý chuổi implode : ghép chuôit
$ch3=implode("||",$arr) ; 
echo $ch3 ; 
// hàm strlen($str) : chả về độ dài chuỗi 
// hàm str_word_count($str) : số chữ trong chuỗi
// hàm str_repeat('chuỗi', số lần lặp lại ): lập lại chuỗi 
echo '<br>'.str_repeat($ch3,5) ; 
//hàm thay ký tự 
echo '<br>'.str_replace('||','..',$ch3) ; 
//hàm md5(chuỗi) ; Mã hóa mật khẩu (32 ký tự)
echo '<br>'.md5($ch3) ; 
//hàm mã hóa sha1 : 40 ký tự 
echo '<br>'.sha1($ch3) ; 
// hàm sử lý chuổi Phần 3 
// hàm htmlentities : chuyển lệnh html thành thực thể 
echo '<br>'.htmlentities('<p> Nguyễn mạnh </p>') ;
$ch5 = htmlentities('<b> Nguyễn mạnh </b>') ;
echo '<br>'.'Hàm html_entity_decode : chuyển về định dạng html :'.html_entity_decode($ch5) ; 
// hàm stip_tags : loại bỏ tất cả thể html trong chuỗi 
// hàm substr : 
// >substr( $string, $start, Şlength ): Hàm này sẽ lấy chuỗi $string từ vị trí $start với độ dài $length
// Ví dụ: echo substr(‘Hienu, 0, 2);
// > strstr( $string, $start_str): Tách một chuỗi từ ký tự cho trước $start_str cho đến hết chuỗi
// Ví dụ: echo strstr(‘Vũ trụ Marketing Hienu – Đào tạo PHP’, ‘Hienu);
// > strpos($str, $substr): Tìm chuỗi $substr trong chuỗi $str. Nếu tìm thấy sẽ trả về số thứ tự. Ngược lại sẽ trả về false;
// Ví dụ: echo strops(‘Hienu, ‘n’);
// substr_replace($str, $replace, $pos, $lent): Hàm sẽ cắt bỏ một đoạn hoặc toàn bộ chuỗi và thay thế đoạn bị cắt bỏ bằng một chuỗi con khác.

// * strtolower($str): Chuyển tất cả ký tự sang viết thường Ví dụ: echo strtolower(‘Hienu);
echo '<br>'.strtolower('Hienu');
echo '<br>'.ucfirst('hienu') ;  
//echo '<br>'.infirst('Hienu') ;  

// * strtoupper($str): Chuyển tất cả ký tượng thành chữ hoa Ví dụ: echo strtolower(‘Hienu’);
// * ucfirst($str): Chuyển chữ cái đầu tiên sang viết hoa Ví dụ: echo ucfirst(‘hienu);
// * Icfirst($str): Chuyển chữ cái đầu tiên sang viết thường Ví dụ: echo Icfirst(‘Hienu’);