<?php
function kiemtranto($n){
    $flag= true;
    if($n<=2){
        $flag=false;
    }else{
        for($i=2;$i<sqrt($n);$i++){
            if(sqrt($n)%2==0){
                $flag=false;
            }
        }
    }
    return $flag;
}