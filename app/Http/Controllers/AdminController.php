<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Http\Requests;

class AdminController extends Controller
{
    public function user(){
    	$users = User::where('grade_id', '<>', 2)->join('grades', 'grade_id', '=', 'grades.id')->paginate(15);
    	return view('admin.user', ['users' => $users, 'title' => 'Liste des utilisateurs']); 
    }
}
