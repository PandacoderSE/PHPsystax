<!-- 2. Chuyển đổi đơn vị tiền tệ:
Tạo form HTML với các trường nhập số tiền, đơn vị tiền tệ gốc và đơn vị tiền tệ muốn chuyển đổi.
Sử dụng method GET hoặc POST để gửi dữ liệu form đến một file PHP khác.
Xử lý dữ liệu form trong file PHP, bao gồm:
Lấy giá trị số tiền, đơn vị tiền tệ gốc và đơn vị tiền tệ muốn chuyển đổi từ biến $_GET hoặc $_POST.
Thực hiện phép tính chuyển đổi đơn vị tiền tệ.
Hiển thị kết quả chuyển đổi trên trang web.
 -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form action="Bai2_zalo.php" method="post">
        <input type="text" name="soTien" placeholder="nhập số tiền">
        <input type="text" name="dvTiengoc" placeholder="nhập đơn vị tiền gốc">
        <input type="text" name="dvTienmuondoi" placeholder="Nhập đon vị tiền muốn đổi">
        <input type="submit">
    </form>
 </body>
 </html>
 <?php
    echo "<pre>";
    echo print_r($_POST);
    echo "</pre>";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $tien=$_POST["soTien"] ; 
        if($_POST["dvTienmuondoi"]=="$" && $_POST["dvTiengoc"]="VND"){
            $tien=$tien/25000; 
            echo"Tiền sau khi đổi :".$tien.$_POST["dvTienmuondoi"];
        }else{
            echo "Không hỗ chợ đổi tiền này ".$tien.$_POST["dvTienmuondoi"];
        }
    }