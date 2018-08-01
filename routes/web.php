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
Route::get('/home', function () {
    return view('admin.layout.home');
});
Route::get('/danhsach', function () {
    return view('admin.event.danhsach');
});
Route::get('/danhsachnhomnguoidung','NhomNguoiDungController@index')->name('danhsachnhomnguoidung');
Route::get('/themnhomnguoidung','NhomNguoiDungController@create') ->name('themnhomnguoidung');
//danh sach chuc nang
Route::get('/danhsachchucnang','ChucNangController@index')->name('danhsachchucnang');
Route::get('/themmoichucnang','ChucNangController@create')->name('themmoichucnang');
//danh sach nguoi dung
Route::get('/danhsachnguoidung','UsersController@index');

        