<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        form{
            padding: 15px;
            border: 1px solid #000;
            width: 240px;
            border-radius: 10px
            
        }
        label,input{
            margin-top: 10px;
            margin-bottom: 10px;
        }
        input{
            width: 100%;
            
        }
        
    </style>
    <!-- Tạo cơ sở dữ liệu đăng nhập ở data.txt sử dụng file đó để xác nhận tài khoản  -->
    <form action="BT_Form_DN.php" method="post">
        <label for="username">Username :</label>
        <br>
        <input type="text" name="username" id="username" placeholder="nhập username">
        <br>
        <label for="password">Password :</label>
        <br>
        <input type="text" name="password" id="password" placeholder="nhập password">
        <br>
        <input type="submit" value="push" style="background-color:#525FE1 ;border-radius: 10px">
    </form>
</body>
</html>
<?php   
    // Đường dẫn đến file
$filename = "data.txt";

// Mở file để đọc
$file = fopen($filename, "r") ;
$users = [] ; 
while (($line = fgets($file)) !== false) {
    $data = explode(",", $line);
    $username = trim($data[0]);
    $password = trim($data[1]);
    $users[$username] = ["password" => $password];
}
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
        echo "Tài khoản không tồntại";
    }

}
// Đóng file
fclose($file);
?>