<?php
echo "Trang xử lý";
//sẽ lư trong $_FILE ; 
//$_SERVER : siwwu toàn cự lưu tất cả thông tin 
if (!empty($_SERVER['REQUEST_METHOD'])) {
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';
}
//up đc ảnh vô files upload ta xywr lý nhưu sau 
    $result = move_uploaded_file($_FILES['manh_upload']['tmp_name'], '\xampp\htdocs\hocPHP\PHPsystax\upload_files\uploads'.$_FILES['manh_upload']['name']);
    var_dump($result);
?>