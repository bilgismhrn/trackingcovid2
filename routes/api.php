<?php
use App\Models\Provinsi;
use App\Models\rw;
use App\Models\kasus2;
use App\Models\kelurahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProvinsiController;
use App\Http\Controllers\Api\ApiController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//api provinsi
Route::get('provinsi',[ProvinsiController::class,'index']);
Route::post('provinsi',[ProvinsiController::class,'store']);
Route::get('provinsi/{id}',[ProvinsiController::class,'show']);
Route::get('provinsi2/{id}',[ProvinsiController::class, 'provinsi']);
Route::delete('provinsi/{id}',[ProvinsiController::class,'destroy']);

//api kasus
Route::get('kasus2/{id}',[ApiController::class,'show']);
Route::get('hariini',[ApiController::class,'hari']);
Route::get('kasus2',[ApiController::class,'index']);
Route::get('indonesia/provinsi',[ApiController::class,'provinsi']);
Route::get('indonesia/provinsi/kota',[ApiController::class,'kota']);
Route::get('indonesia/provinsi/kota/kecamatan',[ApiController::class,'kecamatan']);
Route::get('indonesia/provinsi/kota/kecamatan/kelurahan',[ApiController::class,'kelurahan']);
Route::get('provinsi/{id}',[ApiController::class,'provinsi']);