<?php
namespace App\HTTP\Controllers;
use Illuminate\HTTP\Request;
class randomBeer extends Controller{
function get_random_beer(){
    $link=Http::get('https://api.punkapi.com/v2/beers');
    $data=json_decode($link);
    $random=rand(0,count($data)-1);
    return response()->json([
        "message"=>"success",
        "beerRecipe"=>$data[$random]
    ]);




}

}