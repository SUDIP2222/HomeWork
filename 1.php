<?php
/**
 * Created by PhpStorm.
 * User: sudip sarker
 * Date: 8/5/2016
 * Time: 9:47 PM
 */


    $num=51;
    $base=2;
    $arr=[];
    $i=1;
    while($num!=0){
        $arr[$i++]=$num%$base;
        $num=(int)$num/$base;
    }
    //var_dump($arr);

    for($j=$i-2;$j>0;$j--){
        echo $arr[$j];
    }
