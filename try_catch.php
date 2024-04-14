<?php
// bắt lỗi khi gặp lỗi để chương trình chạy bình thường
try {
    echo "Văn Mạnh php ";
    vanmanh();
} catch (Error $e) {
    echo '<br> Lỗi :'.$e->getMessage().'<br>'; 
    echo 'File:'.$e->getFile().'<br>' ; 
    echo 'Line :'.$e->getLine().'<br>';
}
echo "Văn Mạnh try catch";