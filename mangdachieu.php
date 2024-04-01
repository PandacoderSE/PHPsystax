<?php
$arr = array(
    [
        'so1',
        'so2',
        'so3',
    ],
    [
        'so3',
        'so4',
        'so5',
    ],
    [
        'so7',
        'so8',
        'so9',
    ]
);
//mảng 2 chiều
$arr2 = [
    'key1' => [
        'name' => 'Manh',
        'email' => 'nguyen@gmail.com',
    ],
    'key2' => [
        'name' => 'Nam',
        'email' => 'Nam@gmail.com',
    ],
    'key3' => 'PHP'
];
//shilt+alt+F : format code
//đọc ra tên thì đi từ ngoài vô trong 
echo $arr2['key1']['name'];
//cách sủa
$arr2['key2']['name'] = 'aka';
echo $arr2['key2']['name'] . '<br>';
//sửa mảng đa chiều 
//dùng phòng for để duyện mảng đa chiều tuân tự 
if (!empty($arr)) {
    for ($i = 0; $i < count($arr); $i++) {
        if (is_array($arr[$i])) {
            if (!empty($arr[$i])) {
                for ($j = 0; $j < count($arr[$i]); $j++) {
                    echo $arr[$i][$j] . ' ';
                }

            }
        }
        echo '<br>';
        //else {
        // echo $arr[$i].'<br>' ; 
        //} 
    }
}
//mảng đa chiều không tuần tự 
echo '<br> Mảng đa chiều với key ko tuần tự <br>' ;
if (!empty($arr2)) {
    foreach ($arr2 as $item) {
        if (is_array($item)) { {
                if (!empty($item)) {
                    foreach ($item as $subitem) {
                        echo $subitem . '<br>';
                    }
                }
            }
        }
        else{
            echo $item . '<br>';
        }
    }
}