<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Auth;



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

Route::get('/', [HomeController::class, 'index']);
Route::get('/welcome', [UserController::class, 'welcome']);

Route::POST('/update_profile', [UserController::class, 'update_profile'])->name('update_profile');


/*INDIVIDUAL*/
Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware(['individual', 'accountinfo']);
Route::get('/changepass', [UserController::class, 'changepass'])->middleware(['individual', 'accountinfo']);
Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware(['individual', 'accountinfo']);
/*--INDIVIDUAL--*/



/*MANUFACTURER */
Route::get('/mdashboard', [UserController::class, 'mdashboard'])->middleware(['manufacture', 'mgudie']);
Route::get('/checkout', [UserController::class, 'checkout'])->middleware(['manufacture', 'mgudie'])->name('checkout');
Route::get('/mchangepass', [UserController::class, 'mchangepass'])->middleware(['manufacture', 'mgudie']);
Route::get('/mprofile', [UserController::class, 'mprofile'])->name('mprofile')->middleware(['manufacture', 'mgudie']);
Route::get('/products', [UserController::class, 'products'])->name('products')->middleware(['manufacture', 'mgudie']);
Route::get('/pending_product', [UserController::class, 'pending_product'])->name('pending_product')->middleware(['manufacture', 'mgudie']);
Route::get('/active_product', [UserController::class, 'active_product'])->name('active_product')->middleware(['manufacture', 'mgudie']);
Route::get('/cancled_product', [UserController::class, 'cancled_product'])->name('cancled_product')->middleware(['manufacture', 'mgudie']);
Route::POST('/save_product', [UserController::class, 'save_product'])->name('save_product')->middleware(['manufacture', 'mgudie']);
Route::get('/new_product', [UserController::class, 'new_product'])->name('new_product')->middleware(['manufacture', 'mgudie']);
Route::get('/upload_product', [UserController::class, 'upload_product'])->name('upload_product')->middleware(['manufacture', 'mgudie']);

/*MANUFACTURER */


/*ADMIN */
Route::get('/adashboard', [UserController::class, 'adashboard'])->middleware('admin');
Route::get('/achangepass', [UserController::class, 'achangepass'])->middleware('admin');
Route::get('/individuals', [UserController::class, 'individuals'])->middleware('admin');
Route::get('/engineers', [UserController::class, 'engineers'])->middleware('admin');
Route::get('/manufacturers', [UserController::class, 'manufacturers'])->middleware('admin');
Route::get('/add_category', [UserController::class, 'add_category'])->middleware('admin');
Route::get('/apending_product', [UserController::class, 'apending_product'])->name('apending_product')->middleware('admin');
Route::get('/aactive_product', [UserController::class, 'aactive_product'])->name('aactive_product')->middleware('admin');
Route::get('/acancled_product', [UserController::class, 'acancled_product'])->name('acancled_product')->middleware('admin');
Route::POST('/save_category', [UserController::class, 'save_category'])->name('save_category')->middleware('admin');
Route::get('/adduser', [UserController::class, 'adduser'])->middleware('admin');
Route::POST('/add_user', [UserController::class, 'add_user'])->name('add_user')->middleware('admin');
Route::get('/viewuser/{id}', [UserController::class, 'viewuser'])->name('viewuser')->middleware('admin');

/*ADMIN */







/* ENGINEER */

Route::get('/edashboard', [UserController::class, 'edashboard'])->middleware('enginer');
Route::get('/echangepass', [UserController::class, 'echangepass'])->middleware('enginer');
Route::get('/eprofile', [UserController::class, 'eprofile'])->name('eprofile')->middleware('enginer');


/* ENGINEER */

// PAYSTACK
Route::get('verify_product/{reference}', [UserController::class, 'verify_product'])->name('verify_product');
Route::get('verify/{refrence}', [UserController::class, 'verify'])->name('verify');
Route::get('payment_info', [UserController::class, 'payment_info'])->name('payment_info');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
