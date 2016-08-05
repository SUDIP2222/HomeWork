<?php
/**
 * Created by PhpStorm.
 * User: sudip sarker
 * Date: 8/5/2016
 * Time: 8:58 PM
 */

    for($i=0;$i<4;$i++){
        for($j=0;$j<=$i;$j++){
            echo '*';
        }
        echo "<br>";
    }

    for($i=0;$i<4;$i++){
        for($k=3;$k>$i;$k--){
            echo '*';
        }
        echo '<br>';
    }