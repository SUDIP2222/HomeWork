<?php
/**
 * Created by PhpStorm.
 * User: sudip sarker
 * Date: 8/5/2016
 * Time: 9:29 PM
 */

$ticket=12344;
$sum=0;
while($ticket){
    $sum += $ticket % 10;
    $ticket=(int)$ticket/10;
}

if($sum%7==0){
    echo "Mr. Rahim Win  5000 Taka <br />";
}
else{
    echo"Mr. Rahim Not Win <br />";
}