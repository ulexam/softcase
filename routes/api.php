<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/open/v1/common/symbols',[\App\Http\Controllers\Wrapper::class, 'symbols'])->name('symbols')-> middleware('npm');

Route::get('/open/v1/common/time',[\App\Http\Controllers\Wrapper::class, 'time'])->name('time');

Route::get('/open/v1/market/depth',[\App\Http\Controllers\Wrapper::class, 'depth'])->name('depth');

Route::get('/api/v3/trades?symbol=BUSDBIDR',[\App\Http\Controllers\Wrapper::class, 'busd'])->name('busd');

Route::get('/open/v1/common/time',[\App\Http\Controllers\Wrapper::class, 'time'])->name('time');

Route::get('/user/identitas', function(){
    return [
        'code' => '0',
        'data' => [
            'npm' => '197006035',
            'name' => 'Maulana Ridwan Ibrahim',
            'email' => '197006035@student.unsil.ac.id'
        ]
        ];
})-> middleware('npm');
