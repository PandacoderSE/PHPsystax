<?php
//đặt múi h 
date_default_timezone_set('Asia/Ho_Chi_Minh');
$date = date('Y:m:d H:i:s');
echo $date . "<br>";
echo date_default_timezone_get();
//hàm time ;ấy timestamp của thời điểm hiện tại 
echo "<br> timestamp của thời điểm hiện tại(từ 1970 số giây ) :".time();
// now , 21 March 1996 , next Monday => strtotime() : chuyển định dạng text về timestamp
echo '<br> nowtimestamp : '.strtotime('now').'<br>';
echo '21 March 1996 timestamp : '.strtotime('21 March 1996').'<br>';
echo 'next Monday timestamp : '.strtotime('next Monday').'<br>';