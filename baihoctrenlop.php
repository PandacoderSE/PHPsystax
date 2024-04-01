<?php
    echo "hello word" ; 
    define("VanManh","deptrai vãi lh") ; 
    echo "<br>".VanManh ; 
    //có thể dùng lệnh const ; 
    // define thì có thể khai báo bên trong lệnh if , còn const  thì ko thể . 
    //một số toán tử trong php : === , ==  , !==, <>,vv. 
    //các câu lệnh có điều kiện : if, ifelse, elesif
    // lệnh điều kiện swich case break ; 
    //cấu chú while , do while , for -loops, foreach . 
    $color = array("red","blue","black") ; 
    foreach($color as $x){
        echo "<br> $x" ; 
    }
    // hàm function 
    // cú pháp funcion tên hàm() , có thê là function sum($x,$y) 
    //VD 
    $x=5 ; 
    $y=6 ; 
    function sum($x,$y){
        return $x+$y ; 
    }
    echo "kq =".sum($x,$y) ; 
    //mảng $mang=array("","","") ; 
    //mảng kết hợp : giống map bên java , Có thể cập nhập giá trí bằng cách gọi key của nó VD: $data["sksakd"]="dashd" ; 
    echo "<br>" ; 
    $data = array("haui"=>"viet nam","chesi"=>"london" , "year"=>"van manh") ; 
    foreach($data as $x => $y){
        echo " $x:$y <br>" ; 
    }
    //có nhiều cách thêm item trong mảng kết hợp có thể dùng += 
    //VD 
    $data +=["chi"=>"nguyenthuy"] ; 
    foreach($data as $x => $y){
        echo " $x:$y <br>" ; 
    }
    //Cách xóa phần tử trong mảng , array_splice() , unset 
    //VD 
    $mang1=array(-1,2,3,4) ; 
    foreach($mang1 as $k){
        echo "<br> $k" ; 
    }
   
    foreach($mang1 as $k){
        echo "<br> $k" ; 
    }
    //viết hàm tính giai thừa 
    $giaithua=1 ; 
    $n=10 ; 
    for($i=1 ;$i<=$n ; $i++){
        $giaithua =$giaithua*$i ;
    }
    echo "giai thừa của 10 = ".$giaithua ;
    //bài fibonaci 
    function fibonacci($n) {
        $f0 = 0;
        $f1 = 1;
        $fn = 1;
     
        if ($n < 0) {
            return - 1;
        } else if ($n == 0 || $n == 1) {
            return $n;
        } else {
            for($i = 2; $i < $n; $i ++) {
                $f0 = $f1;
                $f1 = $fn;
                $fn = $f0 + $f1;
            }
        }
        return $fn;
    }
     
    echo "<br> 10 số đầu tiên của dãy số fibonacci: ";
    for($i = 0; $i < 10; $i ++) {
        echo fibonacci ( $i ) . " ";
    }
    //tìm phần tử có giá trị lớn nhất trong mảng kết hợp 
    echo "<br> Tìm phần tử max trong mảng kết hợp" ; 
    $dataa=array(1=>"1",2=>"2", 3=>"9", 4=>"8") ; 
    $max =0 ;
    for( $i=0 ; $i<=count($dataa); $i++){
        if($max<$dataa[$i]){
            $max=$dataa[$i] ;
        }
    }
    echo "<br>Max của mảng kêt hợp là :".$max ; 
    echo "<br> Kiểm tra số nguyên tố <br>" ; 
    // lệnh continiu bỏ qua khối lệnh 
    // die và exit ; đều dừng đoạn chương trình code dưới 
    // tính tổng các số nguyên từ 1 đến 20 
    $tong1=0 ; 
    for($i=1 ;$i<=20 ; $i++ ){
        $tong= $tong +$i ; 
    }
    echo '<br>'."Tổng = $tong".'<br>';
    // bài tập vẽ tam giác = * 
    for($i=0 ; $i<10 ; $i++ ){
       for($j=0; $j<$i; $j++ ){
            echo '*' ; 
       }
       echo '<br>' ; 
    }

    //bài tập kiểm tra số nguyên tố 
    include_once('kiemtranguyento.php');
    if(kiemtranto(9)){
        echo '<br> nó là số nguyên tố' ; 
    }else{
        echo '<br> nó không phải số nguyên tố' ; 
    }
?>