<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Grade;

use App\Http\Requests;

class AdminController extends Controller
{
    public function user(){
    	$users = User::where('grade_id', '<>', 2)->join('grades', 'grade_id', '=', 'grades.id')->paginate(15);
    	return view('admin.user', ['users' => $users, 'title' => 'Liste des utilisateurs']); 
    }

    public function editUser($slug){
    	$slug = explode('-', $slug);
    	$user = User::where('nom', $slug[0])->where('prenom', $slug[1])->first();
    	$grades = Grade::all();
    	return view('admin.editUser', ['user' => $user, 'grades' => $grades, 'title' => 'edition '.$slug[0].' '.$slug[1]]);
    }
}
