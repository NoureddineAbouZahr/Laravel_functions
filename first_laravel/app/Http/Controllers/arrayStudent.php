<?php
namespace App\HTTP\Controllers;
use Illuminate\HTTP\Request;


$students=array("toni","noureddine","John","m7md","lily","yara");

class arrayStudent extends Controller{
    function teams_of_two($students){
        shuffle($students);
        $teams_of_2=array_chunk($students,2);
        return response()->json([
            "message"=>"success",
            "teams"=>$teams_of_2
        ],200);
    



    }

    
}