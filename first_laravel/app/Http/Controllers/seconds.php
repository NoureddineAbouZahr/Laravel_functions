<?php

function time_seconds(){
    $date='14/04/1732';
    $date=str_replace('/','-',$date);
    $years=290;
    $month=2;
    $days=-8;
    $y2d=290*365;
    $m2d=30*2;
    $dayss=$y2d+$m2d+$days;
    $seconds=((($dayss*24)*60)*3600);
    echo $seconds;

}
time_seconds();
