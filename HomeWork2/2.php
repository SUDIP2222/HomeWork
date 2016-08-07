<?php
/**
 * Created by PhpStorm.
 * User: sudip sarker
 * Date: 8/7/2016
 * Time: 8:54 PM
 */


function oddEven($arr){

    $len=count($arr);
    $sum=0;
    for($i=0;$i<$len;$i++){
        if($arr[$i]%2==0){
            echo $arr[$i]."<br />";
            $sum=$sum+1;
        }
    }
    return $sum;
}


$arr=[1,2,3,4,5,6,7,8];

$count=oddEven($arr);

echo "Total Even Number ".$count;