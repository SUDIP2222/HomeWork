<?php
/**
 * Created by PhpStorm.
 * User: sudip sarker
 * Date: 8/5/2016
 * Time: 9:11 PM
 */

    $mark=102;

    switch ($mark) {
        case $mark>=60 && $mark<=70:
            echo "D";
            break;
        case $mark>=71 && $mark<=80:
            echo "C";
            break;
        case $mark>=81 && $mark<=90:
            echo "B";
            break;
        case $mark>=91 && $mark<=100:
            echo "A";
            break;
        default:
            echo "You fail the Exm ... ";
    }