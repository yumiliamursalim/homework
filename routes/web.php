<?php

use App\Http\Controllers\Usercontroller;
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

Route::get('/yumi', function () {
    $backgroundImage = 'url("https://tse2.mm.bing.net/th?id=OIP.mkFvfG2JzokCz8mIo_vkBQHaEK&pid=Api&P=0&h=180")';
    
    return "<html>
                <head>
                    <style>
                        body {
                            background-image: $backgroundImage;
                            background-size: cover;
                            background-position: center;
                            height: 100vh;
                            margin: 0;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            color: #fff; /* warna teks di atas background */
                            font-size: 24px;
                        }
                    </style>
                </head>
                <body>
                    <div>PRESIDEN OF INDONESIAN 2024</div>
                </body>
            </html>";
});


Route::get('/try', function (){
    return view('index');
});

Route::get('/User', [UserController::class,'index'])->name('UserIndex');
Route::get('/masterdata', [UserController::class,'masterdata'])->name('Masterdata');
Route::get('/tambahuser', [UserController::class,'tambah']);
Route::post('/kirimuser', [UserController::class,'add']);
