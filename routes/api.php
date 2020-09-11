<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Models\Trosak;
Use App\Models\Raspored;

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




Route::get('trosak', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return Trosak::all();
});

Route::get('trosak/{id}', function($id) {
    return Trosak::find($id);
});

Route::post('trosak', function(Request $request) {
    return Trosak::create($request->all);
});

Route::put('trosak/{id}', function(Request $request, $id) {
    $Trosak = Trosak::findOrFail($id);
    $Trosak->update($request->all());

    return $Trosak;
});

Route::delete('trosak/{id}', function($id) {
    Trosak::find($id)->delete();

    return 204;
});




Route::get('raspored', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return Raspored::all();
});

Route::get('raspored/{id}', function($id) {
    return Raspored::find($id);
});

Route::post('raspored', function(Request $request) {
    return Raspored::create($request->all);
});

Route::put('raspored/{id}', function(Request $request, $id) {
    $Raspored = Raspored::findOrFail($id);
    $Raspored->update($request->all());

    return $Raspored;
});

Route::delete('raspored/{id}', function($id) {
    Raspored::find($id)->delete();

    return 204;
});


