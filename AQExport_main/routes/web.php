<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\websiteFrontendController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('user.login');
// });
Route::get('/', [websiteFrontendController::class, 'index'])->name('index');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login_user', [AuthController::class, 'login_user'])->name('login_user');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/user_list', [AdminController::class, 'user_list'])->name('user_list');
Route::get('/buyer_list', [AdminController::class, 'buyer_list'])->name('buyer_list');

Route::post('/add_buyer', [AdminController::class, 'add_buyer'])->name('add_buyer');
Route::get('/buyer_edit/{id}', [AdminController::class, 'buyer_edit']);
Route::put('/update_buyer', [AdminController::class, 'update_buyer'])->name('update_buyer');
Route::delete('/delete_buyer_list', [AdminController::class, 'delete_buyer_list'])->name('delete_buyer_list');

Route::post('/add_employee', [AdminController::class, 'add_employee'])->name('add_employee');
Route::get('/employee_edit/{id}', [AdminController::class, 'employee_edit']);
Route::put('/update_employee', [AdminController::class, 'update_employee'])->name('update_employee');
Route::delete('/delete_user_list', [AdminController::class, 'delete_user_list'])->name('delete_user_list');

Route::get('/products/{u_id}', [AdminController::class, 'products'])->name('products');

Route::get('/product_details', [AdminController::class, 'product_details'])->name('product_details');
Route::get('/product_all_details/{u_id}/{id}', [AdminController::class, 'product_all_details'])->name('product_all_details');
Route::get('/product_img/{id}', [AdminController::class, 'product_img'])->name('product_img');
Route::get('/product_remarks/{id}', [AdminController::class, 'product_remarks'])->name('product_remarks');

Route::get('/product_add_form', [AdminController::class, 'product_add_form'])->name('product_add_form');
Route::post('/product_add/{u_id}', [AdminController::class, 'product_add'])->name('product_add');

Route::get('/product_add_date_form/{id}', [AdminController::class, 'product_add_date_form'])->name('product_add_date_form');
Route::put('/product_add_date/{u_id}', [AdminController::class, 'product_add_date'])->name('product_add_date');

Route::get('/product_edit_form/{id}', [AdminController::class, 'product_edit_form'])->name('product_edit_form');
Route::put('/product_edit/{u_id}', [AdminController::class, 'product_edit'])->name('product_edit');
Route::delete('/delete_product', [AdminController::class, 'delete_product'])->name('delete_product');

Route::get('/product_status/{id}', [AdminController::class, 'product_status'])->name('product_status');


Route::get('/header', [FrontendController::class, 'header'])->name('header');
Route::get('/footer', [FrontendController::class, 'footer'])->name('header');



// Route::get('/', function () {
//     return view('user.login');
// });
// Route::get('/product', function () {
//     return view('product_details');
// });
// Route::get('/product_add', function () {
//     return view('add_product_info');
// });
// Route::get('/product_user_view', function () {
//     return view('product_info_for_user');
// });
// Route::get('/product_add_dates', function () {
//     return view('add_product_dates');
// });
Route::get('/product_details_edit', function () {
    return "Hello From Edit";
});
// Route::get('/user_list', function () {
//     return view('user.user_list');
// });

Route::get('/headers', [websiteFrontendController::class, 'headers'])->name('headers');
Route::get('/footers', [websiteFrontendController::class, 'footers'])->name('footers');
// Route::get('/index', [websiteFrontendController::class, 'index'])->name('index');
Route::get('/about_us', [websiteFrontendController::class, 'about_us'])->name('about_us');
Route::get('/contact_us', [websiteFrontendController::class, 'contact_us'])->name('contact_us');
Route::post('/contact_us_mail', [websiteFrontendController::class, 'contact_us_mail'])->name('contact_us_mail');

// Gallery Pages
Route::get('/gallery', [websiteFrontendController::class, 'gallery'])->name('gallery');

Route::get('/knit_wear', function () {
    return view('include.gallery.knit_wear');
});
Route::get('/woven_wear', function () {
    return view('include.gallery.woven_wear');
});
Route::get('/denim_wear', function () {
    return view('include.gallery.denim_wear');
});
Route::get('/winter_wear', function () {
    return view('include.gallery.winter_wear');
}); 
Route::get('/new_production_ss_2022', function () {
    return view('include.gallery.new_production_ss_2022');
}); 
Route::get('/new_production_ss_2022', function () {
    return view('include.gallery.new_production_ss_2022');
}); 
Route::get('/leather', function () {
    return view('include.gallery.leather');
}); 
Route::get('/undergarments ', function () {
    return view('include.gallery.undergarments ');
}); 
