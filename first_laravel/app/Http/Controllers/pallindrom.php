<?php
function check_if_palindrom($string){
    $left=0;
    $right=strlen($string);
    $flag=0;
    while($right>$left){
        if($string[$left]!=$string[r]){
            $flag=1;
        }
        $left++;
        $right--;
    }
    if($flag==0){
        return true;
    }
    else{
        return false;
    }

}
function num_of_palindroms($array){
    $num=0;
    foreach($array as $value){
        if(check_if_palindrom($array[$value])==true){
            $num++;
        }
        echo "there are "+ $num + "palindroms";


    }

}




