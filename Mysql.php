<?php
//client -> server(xử lý) ->client : để lưu trữ và xử lý dữ liệu thì dùng truy vấn sql 
// sử dụng mysqlli
$conn = new mysqli($severname,$username,$password,[$dbname]) ; 
// khởi tao các đối tượng rồi kết nối 