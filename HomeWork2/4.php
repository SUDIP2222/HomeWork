<?php
/**
 * Created by PhpStorm.
 * User: sudip sarker
 * Date: 8/7/2016
 * Time: 9:29 PM
 */

function editArray(&$arr){
    for($i=0;$i<count($arr);$i++){
        $arr[$i]=rand(1,100);
    }
}

$arr =[1,2,3,4];


editArray($arr);

for($i=0;$i<count($arr);$i++){
    echo $arr[$i].'<br>';
}
