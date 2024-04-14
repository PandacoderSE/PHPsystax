<?php
// giúp kiểm tra dữ liệu nhập vào 
/*
    validate form client : thẻ HTML5 , JS
    Validate forem sever : sử dụng PHP : bảo mật hơn là bắt lỗi bên client

    Băt LỖi : họ tên bắt buộc  và lớn hơn 5 ký tự 
    email : bắt buộc và đúng định dạng 
*/

?>
<?php
if (!empty($_POST)) {
    $erros = [];
    //bắt lỗi full name
    if (empty($_POST["fullname"])) {
        $erros['fullname']["required"] = "Bắt buộc phải nhập họ tên !";
    } else {
        if (strlen($_POST["fullname"]) < 5) {
            $erros['fullname']["min_length"] = "Họ tên phải lớn hơn 5 ký tự";
        }
    }
    if (empty($_POST["email"])) {
        $erros['email']["required"] = "Bắt buộc phải nhập email !";
    } else {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $erros["email"]["error_systax"] = "Nhập lại định dạng email";
        }
    }
}
?>
<form action="" method="post">
    <p><label>Họ Tên :</label>
        <input type="text" name="fullname" placeholder="Họ Tên">
        <?php echo !empty($erros['fullname']['required'])? '<p style="color:red">'.$erros['fullname']['required'].'</p>' :' ' ; ?>
        <?php echo !empty($erros['fullname']['min_length'])? '<p style="color:red">'.$erros['fullname']['min_length'].'</p>' :' ' ; ?>
    </p>
    <p>
        <label>email:</label>
        <input type="text" name="email" placeholder="Email">
        <?php echo !empty($erros['email']['required'])? '<p style="color:red">'.$erros['email']['required'].'</p>' :' ' ; ?>
        <?php echo !empty($erros['email']['error_systax'])? '<p style="color:red">'.$erros['email']['error_systax'].'</p>' :' ' ; ?>
    </p>
    <button type="submit">Gửi</button>
</form>
<?php

echo '<pre>' ; 
    print_r($_POST);
echo '</pre>';
?>