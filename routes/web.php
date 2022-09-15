<?php

use App\Models\Client;
use App\Models\Listing;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ListingControler;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployeeContoller;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\AdminGalleryController;
use App\Http\Controllers\UserController;

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

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('/user/store', [UserController::class, 'store'])->name('user/store');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/user/authenticate', [UserController::class, 'authenticate'])->name('user/authenticate');


/* admin routes */
Route::middleware(['auth', 'isAdmin', 'isActive'])->group(function () {
    Route::post('/admin/calendar/store', [CalendarController::class, 'store'])->name('admin/calendar/store');
    Route::post('/admin/calendar/update', [CalendarController::class, 'update'])->name('admin/calendar/update');
    Route::post('/admin/calendar/delete', [CalendarController::class, 'delete'])->name('admin/calendar/delete');

    Route::post('/admin/inventory/store', [InventoryController::class, 'store'])->name('admin/inventory/store');
    Route::post('/admin/inventory/update', [InventoryController::class, 'update'])->name('admin/inventory/update');
    Route::post('/admin/inventory/delete', [InventoryController::class, 'delete'])->name('admin/inventory/delete');

    Route::post('/admin/categories/store', [CategoryController::class, 'store'])->name('admin/categories/store');
    Route::post('/admin/categories/update', [CategoryController::class, 'update'])->name('admin/categories/update');
    Route::post('/admin/categories/delete', [CategoryController::class, 'delete'])->name('admin/categories/delete');

    Route::post('/admin/employees/store', [EmployeeContoller::class, 'store'])->name('admin/employees/store');
    Route::post('/admin/employees/update', [EmployeeContoller::class, 'update'])->name('admin/employees/update');
    Route::post('/admin/employees/delete', [EmployeeContoller::class, 'delete'])->name('admin/employees/delete');

    Route::post('/admin/clients/store', [ClientController::class, 'store'])->name('admin/clients/store');
    Route::post('/admin/clients/update', [ClientController::class, 'update'])->name('admin/clients/update');
    Route::post('/admin/clients/delete', [ClientController::class, 'delete'])->name('admin/clients/delete');

    Route::post('/admin/gallery/store', [AdminGalleryController::class, 'store'])->name('admin/gallery/store');
    Route::post('/admin/gallery/update', [AdminGalleryController::class, 'update'])->name('admin/gallery/update');
    Route::post('/admin/gallery/delete', [AdminGalleryController::class, 'delete'])->name('admin/gallery/delete');

    Route::post('/admin/branches/store', [BranchController::class, 'store'])->name('admin/branches/store');
    Route::post('/admin/branches/update', [BranchController::class, 'update'])->name('admin/branches/update');
    Route::post('/admin/branches/delete', [BranchController::class, 'delete'])->name('admin/branches/delete');
});

Route::middleware(['auth', 'isEmployee', 'isActive'])->group(function () {
    Route::get('/admin/', [DashboardController::class, 'index'])->name('admin');
    Route::get('/admin/calendar', [CalendarController::class, 'index'])->name('admin/calendar');
    Route::get('/admin/inventory', [InventoryController::class, 'index'])->name('admin/inventory');
    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin/categories');
    Route::get('/admin/employees', [EmployeeContoller::class, 'index'])->name('admin/employees');
    Route::get('/admin/clients', [ClientController::class, 'index'])->name('admin/clients');
    Route::get('/admin/gallery', [AdminGalleryController::class, 'index'])->name('admin/gallery');
    Route::get('/admin/branches', [BranchController::class, 'index'])->name('admin/branches');

    Route::get('/admin/profile', function () {
        return view('admin/profile');
    })->name('admin/profile');

    Route::get('/admin/editprofile', function () {
        return view('admin/editprofile');
    })->name('admin/editprofile');
    Route::post('/admin/profile/update', [UserController::class, 'employeeupdate'])->name('admin/profile/update');
});




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
