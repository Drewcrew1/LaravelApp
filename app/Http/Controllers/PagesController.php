<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel!';
        return view('pages.index', compact('title'));
    }
    public function about(){
        $title = 'About us';
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        $data = array(
            'title'=>'Services',
            'services' => ['Web development', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
