<?php


use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\userLogController;
use App\Http\Controllers\accessController;

//use Illuminate\Support\Facades\Route;



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
    return view('index');
});

//Route::get("/posts", [PostController::class, "index"]);



Route::resource('employee', EmployeeController::class);
Route::resource('accesos', accessController::class);

Route::post("/login", [userLogController::class, "index"]);



