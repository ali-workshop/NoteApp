<?php

namespace App\Http\Controllers;
use Python;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use robertogallea\LaravelPython\Services\LaravelPython;
use Symfony\Component\Process\Exception\ProcessFailedException;

class StroyController extends Controller
{
   public function  test(){
    $service = new LaravelPython();
    $text = $service->run('../data.py');
// dd($result);

    return view('story',['text'=>$text]);

   }

   public function showText()
{
    $text = "Your text goes here...";
    return view('story', compact('text'));
}
    
}
