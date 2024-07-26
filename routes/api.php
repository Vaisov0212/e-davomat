<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CheckController;
use App\Models\Check;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('/send',CheckController::class);
Route::get('/', function (\Illuminate\Http\Request $request) {


    $data=new Check([
       'deviceName'=>$request->get('card_uid'),
         'deviceCode'=>$request->get('device_token'),
         'card_id'=>'12B'
    ]);
    $data->save();
            return "OK";
});
