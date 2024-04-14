<?php
/*
phương thức POST : gửi giữ liệu qua 1 cái from HTML , các giá trị đc định nghĩa trong thẻ input( textboxx, radio , checkboxm password , textarea, hidden) ,
và đc nhận dạng thông qua tên(name) của các input đó 
Sever nhận dữ liệu : tất cả dữ liệu gửi bằng POST đều đc lưu trong biết $_POST do PHP tự tạo 

*/
?>
<form action="" method="post">
    <input type="text" name="fullname" placeholder="Họ Tên">
    <input type="text" name="email" placeholder="Email">
    <button type="submit">Gửi</button>
</form>
<?php
    echo '<pre>' ; 
    print_r($_POST) ; 
    echo '</pre>';
    echo $_POST['email'] ; 
?>