<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Theme;
use App\User;

class faqController extends Controller
{
    public function show(){
    	$themes = Theme::all();
   		dd($themes);
    	
    }
}
