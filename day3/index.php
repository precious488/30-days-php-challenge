<?php
if(isset($_POST['submit'])){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $operator=$_POST['operator'];
    $value="";
    if(empty($num1) || empty($num2)){
        echo " enter the number you wan to compute";
    }else{

    
    

switch($operator){
   
    case "add":
        $value = $num1 + $num2;
    break;
    case "-":
        $value = $num1 - $num2;
    break;
    case "*":
        $value = $num1 * $num2;
    break;
    case "/":
        $value = $num1 / $num2;
    break;
    case "%":
        $value =$num1 % $num2;
    break;
    case "sqrt":
        $value = sqrt($num1) ;
    case "^":
        $value =$num1 ^ $num2;
        break;
    default:
    echo "invalid";
    round(int($value), 4);
        echo $value;
}
//echo $value;
    }
}




?>
