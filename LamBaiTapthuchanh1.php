<?php
$arr =array("HTML","CSS","Java","UML","SQL","C++","Ds",) ;
echo "<pre>";
print_r($arr);
echo "<pre>";
//tạo mảng có key => value 
$arr1=['Việt Nam' => 'Hà Nội','Thái Lan' => 'Ban Cốc','Trung Quốc' => 'Bắc Kinh','Nga' => 'bec lin' ] ;
echo "<pre>";
print_r($arr1);
echo "<pre>";
//hàm xóa phần tử trong mảng php 
array_splice($arr,3,1);
echo "<pre>";
print_r($arr);
echo "<pre>";
//chèn phần tử vô mảng có nhiều cách 
echo '<br> phần tử đầu tiên :'.$arr[0] ; 
$arr['AKA']='JavaOI' ; 
echo "<pre>";
print_r($arr);
echo "<pre>";
$arr2=[2,3,5,1,6] ; 
// sắp xếp mảng liên hợp trong php
for($i= 0; $i<count($arr2); $i++){
    for($j=$i+1; $j<count($arr2); $j++){
        if($arr2[$j]<$arr2[$i]){
            $tmp=$arr2[$i] ; 
            $arr2[$i] = $arr2[$j] ;
            $arr2[$j] = $tmp ;
        }
    }
}
echo "<pre>";
print_r($arr1);
echo "<pre>";
//sắp xêp smangr liên hợp
uasort($arr1,function($a,$b)
{
    return strcmp($a, $b);
}) ;
echo "<pre>";
print_r($arr1);
echo "<pre>";
function timGTTB($arr){
    $tong=0.0 ; 
    for($i= 0; $i<count($arr); $i++){
        $tong+=$arr[$i] ; 
    }
    $tong=$tong/count($arr) ; 
    return $tong;
}
$arr4=[1,2,3,4,5] ; 
echo '<br> TBC của mảng là : '.timGTTB($arr4) ;
// nhập 2 mảng trong PHP 
?>
<html>
<head>
    <title>Nhập 2 mảng</title>
<style>
    .css{
        background: green;
    }
</style>
</head>
<body>
<div class='csss'>
    <form action="LamBaiTapthuchanh1.php" method="post">
        <label for="array1">Mảng 1:</label><br>
        <input type="text" id="array1" name="array1"><br>
        <label for="array2">Mảng 2:</label><br>
        <input type="text" id="array2" name="array2"><br><br>
        <input type="submit" value="Submit">
    </form> 
</div>
   
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $array1 = $_POST['array1'];
    $array2 = $_POST['array2'];

    // Chuyển chuỗi nhập vào thành mảng
    $arr1 = explode(',', $array1);
    $arr2 = explode(',', $array2);

    // Hiển thị mảng
    echo "Mảng 1: ";
    print_r($arr1);
    echo "<br>Mảng 2: ";
    print_r($arr2);
}
?>