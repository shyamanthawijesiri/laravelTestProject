<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title = "welcome to the courese";
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = "welcome to the about";
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['web','programming']
        );

        return view('pages.services')->with($data);
    }
}
