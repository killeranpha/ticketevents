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
use App\User;

Route::get('/', function () {
    return view('welcome');
});
//admin - trang chủ 
Route::get('/home', function () {
    return view('admin.layout.home');
});
//admin - event
Route::get('/danhsach', function () {
    return view('admin.event.danhsach');
});
Route::get('/taomoi', function () {
    return view('admin.event.taomoi');
});
Route::get('/ganday', function () {
    return view('admin.event.ganday');
});
//admin - login
Route::get('/login', function () {
    return view('admin.layout.login');
});
Route::get('/forget-pass', function () {
    return view('admin.layout.forget-pass');
});
//admin - thống kê
Route::get('/thongke', function () {
    return view('admin.thongke.thongke');
});
//admin - danh sách
Route::get('/quanlynguoidung', function () {
    return view('admin.nguoidung.quanlynguoidung');
});
<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/danhsachnhomnguoidung','NhomNguoiDungController@index');
Route::get('/danhsachchucnang', function () {
    return view('admin.congcu.danhsach.danhsachchucnang');
});
Route::get('danhsachnguoidung','NguoiDungController@getDanhSach');
<<<<<<< HEAD
Route::get('danhsachcauhinh','CauHinhController@index')->name('danhsachcauhinh');
=======
//search nhóm người dùng
Route::get('/searchnhomnguoidung','NhomNguoiDungController@searchNhomNguoiDung')->name('searchNhomNguoiDung');
// Route::get('/ketquasearchnhomnguoidung','NhomNguoiDungController@searchNhomNguoiDung');
=======
=======
>>>>>>> 6ceacccef6d4eff24c5ee9b7a6b6ed4d5139edf5
Route::get('/danhsachnhomnguoidung', function () {
    return view('admin.nguoidung.danhsachnhomnguoidung');
});
Route::get('/danhsachchucnang','ChucNangController@index');
//search - chuc nang
<<<<<<< HEAD
Route::get('/search','ChucNangController@getSearch')->name('searchChucNang');
>>>>>>> 6ceacccef6d4eff24c5ee9b7a6b6ed4d5139edf5
=======
Route::get('/search','ChucNangController@getSearch')->name('searchChucNang');
>>>>>>> 6ceacccef6d4eff24c5ee9b7a6b6ed4d5139edf5
>>>>>>> e42cfd38ee34d2b6a66d39653b20a9ecb8267020
