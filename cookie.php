<?php
//cookie : chuỗi thông tin ở trình duyệt để theo dõi , lưu lại lịch sử người dùng , tăng sự trải nghiệm 
//1 số chức năng của cookie : ghi nhớ đăng nhập , lịch sử tìm kiếm lịch sử sản phẩm đã xem ., gợi ý sản phẩm 
setcookie('user','Hoc lap trinh php',time()+86400) ; 
    // echo'<pre>';
    // print_r($_COOKIE) ;
    // echo'</pre>';
//xóa thì làm ngược lại , và để thời gian trừ đi thời gian đã set : -60
setcookie('user','Hoc lap trinh php',time()-60) ; 