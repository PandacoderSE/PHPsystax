<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Tạo form HTML với trường nhập văn bản.
Sử dụng method GET hoặc POST để gửi dữ liệu form đến một file PHP khác.
Xử lý dữ liệu form trong file PHP, bao gồm:
Lấy giá trị văn bản từ biến $_GET hoặc $_POST.
Đếm số từ trong văn bản.
Hiển thị số lượng từ trên trang web
 -->
    <form action="Bai4_zalo.php" method="post">
    <label for="text">Enter your text:</label><br>
        <textarea id="text" name="text" rows="4" cols="50" required></textarea><br><br>
        <input type="submit" value="Count Words">
    </form>
</body>
</html>
<?php
echo "<pre>";
echo print_r($_POST);
echo "</pre>";
function vietnamese_word_count($string) {
    $string = trim($string); // Loại bỏ khoảng trắng ở đầu và cuối chuỗi
    $string = preg_replace('/\s+/', ' ', $string); // Chuẩn hóa khoảng trắng
    $words = explode(' ', $string); // Tách chuỗi thành mảng các từ
    $count = count($words); // Đếm số lượng từ
    return $count;
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $chuoi=$_POST["text"];
        $sotu=vietnamese_word_count($chuoi) ; 
        echo"Số từ :".$sotu."";
}