<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Theme;
use App\User;

class faqController extends Controller
{
    public function show(){
    	$themes = Theme::join('users', 'user_id', '=', 'users.id')->get();
   		return view('faq.themes', ['themes' => $themes, 'title' => 'Questions F.A.Q']);
    }
}
