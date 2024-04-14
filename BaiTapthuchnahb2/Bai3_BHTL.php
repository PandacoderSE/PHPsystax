<html>
    <form action="Bai3_BHTL.php" method="post">
        <input type="text" id="usename" name="usename" placeholder="nhập tên đăng nhập">
        <input type="email" id="email" name="email" placeholder="nhập email">
        <input type="password" id="passwork" name="password" placeholder="Mật khẩu">
        <input type="radio" name="gioitinh" value="Nam" id="Nam">Nam</input>
        <input type="radio" name="gioitinh" value="Nu" id="Nu">NỮ</input>
        <input type="radio" name="gioitinh" value="Khac" id="Khac">Khác</input>
        <input type="submit">
    </form>
</html>

<?php
if(!empty($_POST)){
    echo "<pre>" ;
    print_r($_POST);
    echo "</pre>";

}
$str="do you understand what i say ?" ; 
$path="/understand/i" ; 
echo preg_match($path,$str) ; 
$replace="/a/i" ; 
echo preg_replace( $replace,"MANH",$str) ;
//preg_replace : thay thế chuỗi 

