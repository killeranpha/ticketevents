<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class NguoiDungController extends Controller
{
    
    public function getDanhSach(){
        $nguoidung = User::all();
        return view('admin.nguoidung.danhsachnguoidung',['nguoidung'=>$nguoidung]);
    }

}
