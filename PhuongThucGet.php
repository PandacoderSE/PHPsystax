<?php
/*
* Client gửi lên: Phương thức GET là phương thức gửi dữ liệu thông 
qua đường dẫn URL nằm trên thanh địa chỉ của Browser. Server 
sẽ nhận đường dẫn đó và phân tích trả về kết quả cho bạn.
 Ví dụ: Với URL hienu.vn?id=12 thì Server sẽ nhận được giá trị id = 12
* Server nhận dữ liệu: Tất cả các dữ liệu mà Client gửi lên bằng phương thức GET
 đều được lưu trong một biến toàn cục mà PHP tự tạo ra đó là biến $_GET,
  biến này là kiểu mảng kết hợp lưu trữ danh sách dữ liệu từ client gửi lên
   theo quy luật key => value
   VD : http://localhost/hocPHP/PHPsystax/PhuongThucGet.php?module=home&action=get
   Array
(
    [module] => home
    [action] => get
)
*/
//kiểm tra hàm trc khi in 
if (isset($_GET['action'])) {
    echo '<pre>';
    print_r($_GET['action']);
    echo '</pre>';
}else{
    echo 'giá trị không tồn tại ';
}
// echo '<pre>';
// print_r($_GET['Id']);
// echo '</pre>';