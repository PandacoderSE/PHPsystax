<?php
$a=5 ; 
echo ($a<0) ? "Biến A âm" :"Biến A dương" ; 
if($a>0) : 
    echo "Số dương"; 
else :
    echo "Biến dương" ; 
endif ;
//cú pháp thay thế if else
//cú pháp thay thế vòng for 
    for($i=0 ; $i<10; $i++):
    ?>
    <ul>
        <li>item 1</li>
        <li>item 2</li>
        <li>item 3</li>
        <li>item 4</li>
    </ul>


<?php
    endfor;
//cú pháp thay thế while
$i=1 ; 
    while($i<4):
        $i++ ; 
    ?>
     <ul>
        <li>item 4</li>
    </ul>
<?php
    endwhile;

