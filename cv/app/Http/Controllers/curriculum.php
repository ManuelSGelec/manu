<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class curriculum extends Controller
{
   function index(){
 $json= Storage::disk('public')->get('curriculum.json');
 $curriculum=json_decode($json,true);
 return view('curriculum',compact('curriculum'));

   }
}
