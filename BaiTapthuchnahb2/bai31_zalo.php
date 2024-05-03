<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $loaihinh=$_POST["shape"] ; 
    switch($loaihinh){
        case "square":
            echo" size :".$_POST["side"]."<br>";
            echo" Diện tích hình vuông =".($_POST["side"]*$_POST["side"]);
            break;
        case "rectangle":
            $length = $_POST['length'];
            $width = $_POST['width'];
            $area = $length * $width;
            echo" Diện tích chữ nhật =".$area;
            break;
        case "triangle":
            $base = $_POST['base'];
            $height = $_POST['height'];
            $area = 0.5 * $base * $height;
            echo" Diện tích tam giác  =".$area;
            break;
        case "circle":
            $radius = $_POST['radius'];
            $area = M_PI * $radius * $radius;
            echo "Diện tich hình tròn là : ".$area;
            break;
    }
}