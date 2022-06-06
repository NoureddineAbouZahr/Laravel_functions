<?php
namespace App\HTTP\Controllers;
use Illuminate\HTTP\Request;
class output_texts extends Controller{

function text($method,$url,$data){
    $link=Http::get('https://icanhazdadjoke.com/slack');
    $data=json_decode($link);
    return response()->json([
        "status"=>"Success",
        "texts"=>$data->attachments[0]->text],200

    );
    
}

}