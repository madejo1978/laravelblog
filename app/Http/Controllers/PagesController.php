<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// set controller and method
    // a function in a class, is called a method

/* 
// test if PagesController works    
class PagesController extends Controller
{
    public function index(){            // 'public' = acces also from outside of this class
        return 'INDEX';
    }
}
 */

// passing values into a template 
    // 2 ways: compact() or -> with ->

class PagesController extends Controller
{
    public function index(){            
        $title = 'Welcome to Laravel!'; // bring into template/view, 2 ways
        // return view('pages.index',compact('title')); // is going to look in the folder resources\views\pages\index.blade.php
        return view('pages.index')->with('title',$title);
    }

    public function about(){            
        $title = 'About Us';
        return view('pages.about')->with('title',$title);  
    }

    public function services(){            
        $data = array(
            'title' => 'Services output multiple variables in an Array',
            'services' => ['Webdesign', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);  
    }
}
