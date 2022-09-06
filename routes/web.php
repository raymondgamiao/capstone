<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployeesContoller;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ListingControler;
use App\Models\Clients;
use App\Models\Employees;
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
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');


/* admin routes */

Route::get('/admin/', function () {
    return view('admin/index', [
        'title' => 'Dashboard'
    ]);
})->name('admin');

Route::get('/admin/calendar', function () {
    return view('admin/calendar', [
        'title' => 'Calendar'
    ]);
})->name('admin/calendar');

Route::get('/admin/inventory', [InventoryController::class, 'index'])->name('admin/inventory');

Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin/categories');

Route::get('/admin/employees', [EmployeesContoller::class, 'index'])->name('admin/employees');

Route::get('/admin/clients', [ClientsController::class, 'index'])->name('admin/clients');

Route::get('/admin/gallery', function () {
    return view('admin/gallery', [
        'title' => 'Gallery'
    ]);
})->name('admin/gallery');

/* Route::get('/admin/branches', function () {
    return view('admin/branches');
})->name('admin/branches');
 */


Route::get('/admin/branches', [BranchController::class, 'index'])->name('admin/branches');

Route::post('/admin/branches/store', [BranchController::class, 'store']);

/* test routes */

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/listings', [ListingControler::class, 'index']);

Route::get('/listings/create', [ListingControler::class, 'create']);

Route::post('/listings/store', [ListingControler::class, 'store']);

Route::get('/listing/{listing}', [ListingControler::class, 'show']);
/* 
Route::get('/listing/{listing}', function (Listing $listing) {
    return view('listing', [
        'listing' => $listing
    ]);
});

Route::get('/listings', function () {
    return view(
        'listings',
        [
            'listings' => Listing::all()
        ]
    );
});

Route::get('/listing/{id}', function ($id) {
    $listing = Listing::find($id);
    if ($listing) {
        return view(
            'listing',
            [
                'listing' => $listing
            ]
        );
    } else {
        abort('404');
    }
});

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
