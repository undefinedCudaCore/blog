<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountController extends Controller
{
    public function sum($first, $second)
    {
        // $message = $px < 7 ? 'padidink' : '';
     return view('count.sum', ['suma1' => $first, 'suma2' => $second]);
    }   

    public function diff($first, $second)
    {
        // $message = $px < 7 ? 'padidink' : '';
     return view('count.diff', ['suma1' => $first, 'suma2' => $second]);
    }   
    
    public function multi($first, $second)
    {
        // $message = $px < 7 ? 'padidink' : '';
     return view('count.multi', ['suma1' => $first, 'suma2' => $second]);
    }   

    public function div($first, $second)
    {
        // $message = $px < 7 ? 'padidink' : '';
     return view('count.div', ['suma1' => $first, 'suma2' => $second]);
    }   
    
    // public function diff($px)
    // {
    //     $message = $px < 7 ? 'padidink' : '';
    //  return view('africa.simba', ['aukstis' => $px, 'message' => $message]);
    // }   
    
    // public function multi($px)
    // {
    //     $message = $px < 7 ? 'padidink' : '';
    //  return view('africa.simba', ['aukstis' => $px, 'message' => $message]);
    // }   
    
    // public function div($px)
    // {
    //     $message = $px < 7 ? 'padidink' : '';
    //  return view('africa.simba', ['aukstis' => $px, 'message' => $message]);
    // }
}
