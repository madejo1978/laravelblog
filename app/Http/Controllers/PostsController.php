<?php
 
// This controller is created with:
    // php artisan make:controller PostsController --resource
    // with the --resource: it creates also function/methods 
    // these are methods for using CRUD 



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;                               //  activate model to fetch data (namespace = App title = Post)

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     
    public function index()
    {
        // return Post::all();                         // part of elequent, will fetch all the data  
                                                       // 'returns' the data in an array
        
        $posts = Post::all();                          // put it in an variable
        return view('posts.index')->with('posts',$posts);
    }                                                       // put it into view with with()

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Post::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
