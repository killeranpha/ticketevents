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
Route::get('/abc', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('admin.layout.index');
});
Route::get('/home', function () {
    return view('admin.layout.home');
});
Route::get('/danhsach', function () {
    return view('admin.event.danhsach');
});
Route::get('/taomoi', function () {
    return view('admin.event.taomoi');
});
Route::get('/login', function () {
    return view('admin.layout.login');
});
Route::get('/forget-pass', function () {
    return view('admin.layout.forget-pass');
});
Route::get('/ganday', function () {
    return view('admin.event.ganday');
});
Route::get('/thongke', function () {
    return view('admin.thongke.thongke');
});
Route::get('/danhsachnguoidung', function () {
    return view('admin.nguoidung.danhsachnguoidung');
});
Route::get('/quanlynguoidung', function () {
    return view('admin.nguoidung.quanlynguoidung');
});