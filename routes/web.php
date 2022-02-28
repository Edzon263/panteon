<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartJsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|sexo, edad, mes
*/

Route::get('/', function () {
    return view('inicio');
})->name('inicio');
Route::get('/reportes', 'ChartJSController@index')->name('reportes');

Route::get('/informaciontitulares', function () {
    return view('informacionTitulares');
})->name('informacionTitulares');

Route::get('/registrolotes', 'RegistroLote@index')->name('registrolotes');
Route::post('/registrolotes', 'RegistroLote@store')->name('lotes.store');

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('/registroservicios', 'RegistroServicio@index')->name('registroservicios');
Route::get('/busquedatitular', 'BusquedaTitular@index')->name('busquedatitular');
Route::get('datatable/titulares', 'App/Http/Controllers/DatableController@index')->name('index');
Route::get('titulares/{id}', 'BusquedaTitutal@edit')->name('titulares.edit');
Route::patch('titulares/{id}', 'BusquedaTitular@update')->name('titulares.update');
Route::delete('titulares/{id}', 'BusquedaTitular@destroy')->name('titulares.destroy');

Route::get('/registrotitulares', function () {
    return view('registrotitulares');
})->name('registrotitulares');

Route::get('/registrobeneficiarios', function () {
    return view('registrobeneficiario');
})->name('registrobeneficiarios');

Route::get('/pagos', function () {
    return view('pagos');
})->name('pagos');

Route::post('registrotitulares', 'RegistroTitular@store')->name('titular.store', 'titular');

Route::post('registrobeneficiarios', 'RegistroBeneficiario@store')->name('beneficiario.store', 'beneficiario');
Route::post('pagos', 'Pago@store')->name('pago.store', 'pago');

Route::post('registroservicios', 'RegistroServicio@store')->name('servicios.store');

Route::get('getlotes', 'RegistroLote@getLotes');
Route::get('getLoteFinado', 'RegistroServicio@getLoteFinado');
Route::get('getTitular', 'RegistroTitular@getTitular');

Auth::routes();
//Route::get('/', 'HomeController@index')->name('home');
