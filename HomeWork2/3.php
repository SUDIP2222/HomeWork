<?php
/**
 * Created by PhpStorm.
 * User: sudip sarker
 * Date: 8/7/2016
 * Time: 9:05 PM
 */


$odd=0;
$even=0;


function oddEven($arr){
    global $odd,$even;

    for($i=0;$i<count($arr);$i++){
        if($arr[$i]%2==0){
            $even++;
        }
        else{
            $odd++;
        }
    }
}

$arr2=[1,2,3,4,5,6,7,8];
oddEven($arr2);

echo "Total Even Number : ".$even.'<br>';
echo "Total Odd Numbmer : ".$odd.'<br>';