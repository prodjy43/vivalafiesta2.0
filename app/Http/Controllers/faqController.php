<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Theme;
use App\User;
use App\Comment;

class faqController extends Controller
{
    public function show(){
    	$themes = Theme::join('users', 'user_id', '=', 'users.id')->orderBy('themes.created_at', 'desc')->get();
    	foreach ($themes as $theme) {
    		$nbcomment[$theme->slug] = Comment::where('theme_slug', $theme->slug)->count();
    	}
   		return view('faq.themes', ['themes' => $themes, 'nbcomment' => $nbcomment, 'title' => 'Questions F.A.Q']);
    }

    public function disc($slug){
    	$question = Theme::where('slug', $slug)->join('users', 'user_id', '=', 'users.id')->first();
    	$comments = Comment::where('theme_slug', $slug)->join('users', 'user_id', '=', 'users.id')->get();
 		return view('faq.question', ['question' => $question, 'comments' => $comments, 'title' => $question->question]);
    }

    public function addtheme(){
    	return view('faq.addtheme', ['title' => 'Posez une question']);
    }

    public function storeTheme(Request $request){
    	$this->validatorTheme($request->all())->validate();
    	$this->createTheme($request->all());
    	return redirect('/faq/themes');
    }

    public function storeComment(Request $request){
    	$this->validatorComment($request->all())->validate();
    	$this->createComment($request->all());
    	return redirect('/faq/themes/'.$request->all()['slug']);
    }

    private function validatorComment(array $data){
    	return Validator::make($data, [
    			'title' => 'required|min:10|max:140',
    			'content' => 'required|min:10',
    			'slug' => 'required',
    		]);
    }

    private function validatorTheme(array $data){
    	return Validator::make($data, [
    			'question' => 'required|min:10|max:140',
    			'theme' => 'required|min:5|max:50',
    		]);
    }

    private function createComment(array $data){
    	return Comment::create([
    			'title' => $data['title'],
    			'content' => $data['content'],
    			'user_id' => Auth::user()->id,
    			'theme_slug' => $data['slug'],
    		]);
    }

    private function createTheme(array $data){
    	return Theme::create([
    			'question' => $data['question'],
    			'theme' => $data['theme'],
    			'user_id' => Auth::user()->id,
    			'slug' => str_slug($data['question']),
    		]);
    }
}