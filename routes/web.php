<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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


/* main website routes */

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/contact', function () {
    return view('contact');
});


/* admin routes */

Route::get('/admin/', function () {
    return view('admin/index');
});

Route::get('/admin/calendar', function () {
    return view('admin/calendar');
});

Route::get('/admin/inventory', function () {
    return view('admin/inventory');
});
/* test routes */

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/listings', function () {
    return view(
        'listings',
        [
            'heading' => 'Latest Listings',
            'listings' => Listing::all()
        ]
    );
});

Route::get('/listing/{id}', function ($id) {
    return view(
        'listing',
        [
            'heading' => 'Listing #' . $id,
            'listing' => Listing::find($id)
        ]
    );
});




/* 
Route::get('/hello', function () {
    return response('<h1>Hello World!</h1>', 200)
        ->header('Content-type', 'text/plain')
        ->header('foo', 'bar');
});

Route::get('/posts/{id}', function ($id) {
    return response('Post' . $id);
})->where('id', '[0-9]+'); 

Route::get('/posts', function () {
    return response()->json([
        'posts' => [
            [
                'title' => 'meow'
            ]
        ]
    ]);
}); 

Route::get('/search', function (Request $request) {
    return $request->name . "  " . $request->city;
});

*/
