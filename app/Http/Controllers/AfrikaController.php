<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AfrikaController extends Controller
{
   public function zirafa()
   {
       return 'Zirafa Kung-Fu';
   }
   public function simba($px)
   {
       $message = $px < 7 ? 'padidink' : '';
    return view('africa.simba', ['aukstis' => $px, 'message' => $message]);
   }
}
