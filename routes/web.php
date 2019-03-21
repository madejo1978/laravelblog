<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* 
Route::get('/', function () {
   return view('welcome');
});
 */

 // if you go to 'http://laravelblog.test/martinus' it will echo 'welcome Martinus'
    // GET, POST or DELETE (=restful API)

/* 
    Route::get('/martinus', function () {
    //  return view('welcome');
    return '<h1>welcome Martinus</h1>';
});
 */

/* 
// dynamic routes (= to use the information from the url)

    // 1 parameter 
        
        Route::get('/users/{id}', function($id) {  // syntax in url:{}
            return 'This is user ' . $id; 
        });

    // 2 parameters
        Route::get('/users/{id}/{name}', function($id, $name){  
            return 'This is user ' . $name . ' with an id of ' . $id; 
        });
 */ 

/* 
// Routes 
Route::get('/', 'PagesController@index'); // @ means it loads the method index() declared in PagesController
        
Route::get('/about', function() {
    return view('pages.about'); // directory, syntax: is . instead of /
});
 */

// separate views in folders
// you never want to return a view from your route
    // 1 set a controller, 2 set the route to a certain controller-function, 3 and then return the view
            // 1 php artisan make:controller PagesController
            // 2 set controller and method
            // 3 load a view

                // 1 php artisan make:controller PagesController (PascalCase)
                // 2 PagesController


Route::get('/', 'PagesController@index');  // @ means it loads the method index() declared in PagesController
Route::get('/about', 'PagesController@about');  
Route::get('/services', 'PagesController@services');  
//form + validation
Route::post('/posts', 'PostsController@store');  
Route::get('/posts/create', 'PostsController@create');  

  

// the command: php artisan route:list
    // shows the existing routes
        // if you create a new route in this file, it will also show up in the list
        // the route will connect with the functions/methods created in the PostsController
Route::resource('posts', 'PostsController');  
                