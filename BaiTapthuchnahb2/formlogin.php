<?php
$users = array(
    "user1" => array("username" => "user1", "password" => "manh2003"),
    "user2" => array("username" => "user2", "password" => "pass2"),
    // Thêm nhiều user khác nếu cần
);
?>
<html>
    <h1>Thực hiện đăng nhập tài khoản.</h1>
    <form action="" method="post">
        <label for="username">Username :</label>
        <br>
        <input type="text" id="username" name="username" placeholder="Nhập tên đăng nhập">
        <br>
        <label for="password">Password :</label>
        <br>
        <input type="password" id="password" name="password" placeholder="Nhập mật khẩu">
        <br>
        <input type="submit" value="login">
    </form>
</html>
<?php
    //kiểm tra tồn tại của post 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username=$_POST["username"] ;
        $password=$_POST["password"] ;
        //kiemr tra tên tài khoản 
        if(array_key_exists($username,$users)){
            if($users[$username]["password"]==$password){
                echo"Đăng Nhập thành công ";
            }else{
                echo "Sai Mật Khẩu";
            }
        } else{
            echo "Tài khoản không tồn tại";
        }

    }