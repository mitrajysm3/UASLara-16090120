<?php

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

Route::get('/', function(){
	return view('index');
});

Route::get('/testing', function() {
	return view('coba');
});

//Route::get('/home', function() {
	//return view('pages.home');
//});

Route::get('/about', function() {
	return view('pages.about');
});

Route::get('/form', function(){
	return view('form');
});

Route::get('karyawan', function(){
	$karyawan=['Munawar', 'Budi Santoso', 'Widya Ningrum',
	'Unggul Jaya'];
	return view('pages.karyawan', compact('karyawan'));
});

Route::get('admin', 'admincontroller@index');
Route::get('halamanadmin', 'adminController@create')->name('pages.halamanadmin');
Route::post('store2', 'adminController@store2')->name('pages.store2');
Route::get('belajar', 'BelajarController@index');
Route::get('home', 'homecontroller@index');
Route::get('akuntansi', 'homecontroller@kategori');
Route::get('computer', 'homecontroller@kategori2');
Route::get('kesehatan', 'homecontroller@kategori3');
Route::get('motivasi', 'homecontroller@kategori4');
Route::get('biografi', 'homecontroller@kategori5');
Route::get('travel', 'homecontroller@kategori6');
Route::get('informatika', 'homecontroller@kategori7');
Route::get('homeadmin', 'homeadmincontroller@index');
Route::get('create', 'homeadminController@create')->name('pages.create');
Route::post('store', 'homeadminController@store')->name('pages.store');
Route::get('register', 'homeadmincontroller@register');
Route::get('login', 'logincontroller@index');
Route::get('order', 'ordercontroller@index');
Route::get('user', 'usercontroller@index');
Route::get('/user/{id}/edituser', 'usercontroller@edit')->name('user.edit');
Route::post('/user/{id}/update', 'usercontroller@update')->name('user.update');
Route::get('/user/{id}/delete', 'usercontroller@delete')->name('user.delete');
Route::get('transaksi', 'transaksicontroller@index');
Route::get('buku', 'bukucontroller@index');
Route::get('/buku/{id}/editbuku', 'bukucontroller@edit')->name('buku.edit');
Route::post('/buku/{id}/update', 'bukucontroller@update')->name('buku.update');
Route::get('/buku/{id}/delete', 'bukucontroller@delete')->name('buku.delete');
Route::get('transaksibuku', 'transaksibukucontroller@index');
Route::get('lihatbuku', 'lihatbukucontroller@index');




