<?php
 
// This controller is created with:
    // php artisan make:controller PostsController --resource
    // with the --resource: it creates also function/methods 
    // these are methods for using CRUD 

// findOrFail() is better to use than find(), it gives an error-code if not found


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;            //  activate model to fetch data (namespace = App title = Post)
use DB;                  // if you want to use the sql-querie instead of Elequent. Activatie the DB-library: use DB   

class PostsController extends Controller
{

    /**
     * Middleware provide a convenient mechanism for filtering HTTP requests entering your   
     * application. If the user is not authenticated, the middleware will redirect the user to 
     * the login screen    
     
     * Get the path the user should be redirected to when they are not authenticated.
     
     * Create a new controller instance.
     *
     * @return void
     */

    // 2nd parameter are exceptions in an array which you can see when not logged in 
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);   
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     
    public function index()
    {
        // return Post::all();      // part of elequent, will fetch all the data  
                                    // 'returns' the data in an array
        
        // $posts = Post::all();    // put it in an variable
        
        // instead of all(), you can use orderBy(), but only works with get(): orderBy()->get()
        // $posts = Post::orderBy('title','desc')->get();
        
        // with take() you can limit the number of posts 
            // $posts = Post::orderBy('title','desc')->take(2)->get();
        
            //  $posts = DB::select('SELECT * FROM posts'); // SQL-query is also possible
        // instead of getting by ID, you can use where.  
            // example is get by title:
                // return Post::where('title','Post Two')->get();

        // automatic page-numbering with: paginate() and {{$posts->links()}} in the views 
        $posts = Post::orderBy('created_at','desc')->paginate(5);

        // put it into view with: with()
        return view('posts.index')->with('posts',$posts);

    }                                                       

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'body'  => 'required'
        ]);
            // return 'title en body are filled-in AND the button submit is pressed'
            // return request()->all();
        
        // create post
            // with user-identification
        $post = new Post;
        $post->title = $request->input('title');    
        $post->body = $request->input('body');   
        $post->user_id = auth()->user()->id; // the currenty loggedin user_id will be put in the user_id 
        $post->save();

        return redirect('/posts')->with('success','Youre new Blog is created at the top of this page');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return Post::findOrFail($id);
        $post = Post::findOrFail($id);
        return view('posts.show')->with('post', $post); // show.blade.php
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) // example.com/projects/1/edit
    {
        $post = Post::findOrFail($id);
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    // public function update(Request $request, $id)
    {
        // dd('hello');  // laravels: echo console.log means: Die and Dump 
        // dd(request()->all());
        
        $post = Post::findOrFail($id);

        $post->title = request('title');
        $post->body  = request('body');
        $post->save();
        
        return redirect('/posts')->with('success','Youre Blog has been updated'); 
        
        /* 
        $validatedData = $request->validate([
            'title' => 'required',
            'body'  => 'required'
        ]);

        // Edit post     
        $post = Post::findOrFail($id);

        $post->title = $request('title');
        $post->body  = $request('body');

        $post->save();

        return redirect('/posts')->with('success','Youre Blog has been updated'); 
     */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd('delete', $id);
        Post::findOrFail($id)->delete();
        return redirect('/posts')->with('success','Youre Blog has been deleted');
    }
}
