<?php

use App\Http\Controllers\AdminGalleryController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployeeContoller;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ListingControler;
use App\Models\Client;
use App\Models\Employee;
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
Route::post('/admin/inventory/store', [InventoryController::class, 'store']);

Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin/categories');
Route::post('/admin/categories/store', [CategoryController::class, 'store']);


Route::get('/admin/employees', [EmployeeContoller::class, 'index'])->name('admin/employees');
Route::post('/admin/employees/store', [EmployeeContoller::class, 'store']);


Route::get('/admin/clients', [ClientController::class, 'index'])->name('admin/clients');
Route::post('/admin/clients/store', [ClientController::class, 'store']);


Route::get('/admin/gallery', [AdminGalleryController::class, 'index'])->name('admin/gallery');
Route::post('/admin/gallery/store', [AdminGalleryController::class, 'store']);


Route::get('/admin/branches', [BranchController::class, 'index'])->name('admin/branches');
Route::post('/admin/branches/store', [BranchController::class, 'store'])->name('admin/branches/store');
Route::post('/admin/branches/update', [BranchController::class, 'update'])->name('admin/branches/update');
Route::post('/admin/branches/delete', [BranchController::class, 'delete'])->name('admin/branches/delete');







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
