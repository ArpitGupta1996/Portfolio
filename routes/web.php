<?php

use App\Http\Controllers\API\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('contact', [ContactController::class,'contact'])->name('contact');

// Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


Route::resource('blog', BlogController::class);
// Route::get('blog-detailed/{blogPost}', [BlogController::class,'blogdetailed'])->name('blog-detailed');
Route::get('blog-detailed/{blogPost}', [BlogController::class,'blogdetailed']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
}); 


Route::get('curl', [UserController::class, 'curl']);


#fallback route must be thelast route to be registredin theapplication
Route::fallback(function(){
    return view('error');
});