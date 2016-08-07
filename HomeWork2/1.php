<?php
/**
 * Created by PhpStorm.
 * User: sudip sarker
 * Date: 8/7/2016
 * Time: 8:47 PM
 */


function leapYear($year){

    if($year%4==0){
        return true;
    }
    else{
        return false;
    }
}



$year=2008;

$value=leapYear($year);

if($value){
    echo $year." is  Leap Year";
}

else{
    echo $year." is not Leap Year";
}