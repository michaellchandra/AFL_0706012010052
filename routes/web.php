<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\SoftwareController;
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

// Route::get('/', function () {
//     return view('home',[
//         'title' => 'home',
//         'pagetitle' => 'Home - Computer Software Seller'
//     ]);
// });

// Route::get('/software', function () {
//     return view('softwarelist',[
//         'title' => 'softwarelist',
//         'pagetitle' => "Software - Computer Software Seller"
//     ]);
// });

Route::get('/', [MainController::class, 'index']);
Route::get('/software', [SoftwareController::class, 'viewSoftwareList']);
Route::get('/addSoftware',[SoftwareController::class, 'addSoftwareList']);
Route::post('/addData',[SoftwareController::class, 'addSoftwareData']);

    
