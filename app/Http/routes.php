<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\User;

Route::get('/', function () {
    return view('login');
});

Route::get('login', "LoginController@login");
Route::get('logout', "LoginController@logout");
Route::post('submit-login', "LoginController@submitlogin");



Route::group(['middleware:auth'], function () {
     Route::get('/search', "HomeController@index");
     Route::get('/result', "HomeController@result");
     Route::get('/list', "HomeController@listOpr");
     Route::get('/list1', "bidikmisi\LaporanController@listlap");
     Route::get('/biodata/{id_mahasiswa}', "HomeController@bio");

     Route::get('/menu/{id_mahasiswa}',"HomeController@listMenu");
});



//mahasiswa
Route::group(['prefix' =>'bidikmisi/mahasiswa'], function(){
Route::get('list/{id_mahasiswa}', "bidikmisi\BidikmisiMahasiswaController@listMahasiswa");
Route::get('/new', "bidikmisi\BidikmisiMahasiswaController@newMahasiswa");
Route::get('/edit/{id_mahasiswa}', "bidikmisi\BidikmisiMahasiswaController@editMahasiswa");

Route::post('/insert', "bidikmisi\BidikmisiMahasiswaController@insertMahasiswa");
Route::post('/update', "bidikmisi\BidikmisiMahasiswaController@updateMahasiswa");
Route::post('/delete', "bidikmisi\BidikmisiMahasiswaController@deleteMahasiswa");
});

//rangking
//ROUTE rangking
Route::group(['prefix' =>'bidikmisi/rangking'], function(){
Route::get('/listing', "bidikmisi\BidikmisiRangkingController@listRangking");
Route::get('/new', "bidikmisi\BidikmisiRangkingController@newRangking");
Route::get('/edit/{id_mahasiswa}', "bidikmisi\BidikmisiRangkingController@editRangking");

Route::post('/insert', "bidikmisi\BidikmisiRangkingController@insertRangking");
Route::post('/update', "bidikmisi\BidikmisiRangkingController@updateRangking");
Route::post('/delete', "bidikmisi\BidikmisiRangkingController@deleteRangking");
});

//ROUTE pendukung
Route::group(['prefix' =>'bidikmisi/pendukung'], function(){
Route::get('/', "bidikmisi\BidikmisiPendukungController@listPendukung");
Route::get('/new', "bidikmisi\BidikmisiPendukungController@newPendukung");

Route::get('/edit/{id_mahasiswa}', "bidikmisi\BidikmisiPendukungController@editPendukung");

Route::post('/insert', "bidikmisi\BidikmisiPendukungController@insertPendukung");
Route::post('/update', "bidikmisi\BidikmisiPendukungController@updatePendukung");
Route::post('/delete', "bidikmisi\BidikmisiPendukungController@deletePendukung");
});

//ROUTE orangtua
Route::group(['prefix' =>'bidikmisi/orangtua'], function(){
Route::get('/', "bidikmisi\BidikmisiOrangtuaController@listOrangtua");
Route::get('/new', "bidikmisi\BidikmisiOrangtuaController@newOrangtua");
Route::get('/edit/{id_mahasiswa}', "bidikmisi\BidikmisiOrangtuaController@editOrangtua");
Route::post('/insert', "bidikmisi\BidikmisiOrangtuaController@insertOrangtua");
Route::post('/update', "bidikmisi\BidikmisiOrangtuaController@updateOrangtua");
Route::post('/delete', "bidikmisi\BidikmisiOrangtuaController@deleteOrangtua");
});
//ROUTE tim_visitasi
Route::group(['prefix' =>'bidikmisi/visitasi'], function(){
Route::get('/', "bidikmisi\BidikmisiTimVisitasiController@listTimVisitasi");
Route::get('/new', "bidikmisi\BidikmisiTimVisitasiController@newTimVisitasi");
Route::get('/edit/{id_mahasiswa}', "bidikmisi\BidikmisiTimVisitasiController@editTimVisitasi");
Route::post('/insert', "bidikmisi\BidikmisiTimVisitasiController@insertTimVisitasi");
Route::post('/update', "bidikmisi\BidikmisiTimVisitasiController@updateTimVisitasi");
Route::post('/delete', "bidikmisi\BidikmisiTimVisitasiController@deleteTimVisitasi");
});


Route::get('generate-form', "GenerateController@generateform");
Route::get('generate-route', "GenerateController@generateroute");
Route::get('generate-list', "GenerateController@generatelist");
Route::get('generate-form-list', "GenerateController@generateformlist");
Route::post('generate-route-result', "GenerateController@generaterouteresult");
Route::post('generate-list-submit', "GenerateController@generatelistsubmit");
Route::get('form/baru/{table_name}', "GenerateController@generateformbaru");
Route::get('form/edit/{table_name}', "GenerateController@generateformedit");
Route::get('/create-user', function () {
    $user = User::find(1);
    $user->password = Hash::make('123456');
    $user->save();
});

Route::get('pdfview',array('as'=>'pdfview','uses'=>'HomeController@pdfview'));
