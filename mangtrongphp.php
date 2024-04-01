<?php
//mảng lưu chữ các kiểu dữ liệu giống nhau ; 
// khai báo mảng sử dụng array() ; 
//khái báo mảng cách 1 : 
$arr = array('HTML', 'JS', 'PHP');
//cách 2 : 
$arr2 = ['HTML', 'JS', 'PHP'];
//in mảng 
echo '<pre>';
print_r($arr);
echo '</pre>';
//khai báo mảng rống ; 
$arrEmpty = [];
// có thể chỉnh sửa key cho từng value
$arr3 = ['key1' => 'HTML', 'key2' => 'JS', 'key3' => 'PHP'];
echo '<pre>';
print_r($arr3);
echo '</pre>';
// thêm phần tử cho mảng  
// cách 1 điền tên key và giá trị $arr[key]= value ; 
//cách 2 : $arr[]=value : ko thêm key 
//cách 3 : dùng tông qua hàm array_push($arr,value1 , value2) ; 
//cách 4 : $arr +=["chi"=>"nguyenthuy"] ; 
$arr3['key4'] = 'nà ní';
$arr3[] = 'C++';
$arr3[] = 'java';
echo '<pre>';
print_r($arr3);
echo '</pre>';
// hàm array_push 
array_push($arr2, 'notejs', 'ruby', 'C++');
echo '<pre>';
print_r($arr2);
echo '</pre>';
//sửa mảng thì viết tên biến và key 
$arr2[0] = 'html';
//xóa phần tử mảng 
unset($arr3[1]);
//đọc mảng , nếu key là số thứ tự 0,1,2.. dùng for
if (!empty($arr2)) {
    for ($i = 0; $i < count($arr2); $i++) {
        echo '<br>' . $arr2[$i] . '';
    }
}
//mảng ko tuần tự thì dùng foreach
if (!empty($arr3)) {
    foreach ($arr3 as $key => $item) {
        echo '<br>' . $arr3[$key] . '';
    }
}
$arr = array(2, 3, 4, 6, 7, 9, 10);
//count($arr) : đếm số lượng phần tử trong mảng 
//
$arr5 = [
    'key1' => 'HTML',
    'key2' => 'JS',
    'key3' => 'PHP'
];
//array_values($array) : đưa mảng về dạng tuần tự 
$arraynew= array_values($arr5);
echo '<pre>' ; 
print_r($arraynew);
echo '</pre>';
//array_key : trả về mảng tuần tự với giá trị là các key , còn key là 1, 2, 3, 4
$arraykey=array_keys($arr5);
echo '<pre>' ; 
print_r($arraykey);
echo '</pre>';
//array_pop : trả  về phần tử cuối cùng của mảng 
//is_array : kiêm rtra xem đây có phải dạng mảng hay ko 
//array_shift : xóa phần tử đầu tiên trong mảng và trả về phân tử vừa xóa 
echo array_shift($arraynew);
echo '<pre>' ; 
print_r($arraynew);
echo '</pre>';
//array_unshift($arr,'var')  : thêm nột hoạc nhiều phần tử  vào đầu mảngcho mảng và trả về số lượng phân ftuwr của mảng sau khi thêm  
//in_array($value, $arr) : kiểm tra xme giá trị có tồn tại trong mảng ko 
$arraysort =sort($arr); // thành công thì trả về true , ko thì false
echo '<pre>' ; 
print_r($arr);
echo '</pre>';
//hàm array_reverse($array) : đảo ngược vị trí các phân ftuwr trong mảng 
$arrnguoc=array_reverse($arr) ; 
echo '<pre>' ; 
print_r($arrnguoc);
echo '</pre>';
//hàm array_merge(mảng 1, mảng 2) : gộp 2 hay nhiều mảng thành 1 
$array_gop = array_merge($arr3, $arr2);
// hàm array_rand($arr, $numbel) : lấy ra n=$numbel key ngẫu nhiên 
//hàm array_search(&giastri,$mảng) : đưa ra vị chí của giá trị 
//array_unique($mang) : lọc mảng khỏi các phần tử trùng nhau 
//array_key_exists($key,$arr) : kiểm tra trong mảng có ttoong tại $key hay ko , true nếu có và ngược lại 