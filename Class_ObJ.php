<?php
class vanmanh
{
    
    private $a;
    private $b;
    // public function vanmanh($c,$d){
    //     $this->a=$c ; 
    //     $this->b=$d ; 
    // }
    public function tong($a, $b)
    {
        $tong = $a + $b;
        return $tong;
    }
    public function show(){
        echo 'Đây là hàm trong class vanmanh' ;
    }
}
$bien1 = new vanmanh();
echo "1+2 =".$bien1->tong(1,2).'<br>';
// cách để sử dụng các hàm của class dùng dấu :  ->
$bien1->show();
