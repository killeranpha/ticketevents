<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $danhSach = Users::select('ten','email','soDienThoai','CMND','active');
        $danhSach = $danhSach->where('ten','like',"%".$request->timKiem."%");
        $ten = isset($request->ten)?$request->ten:0;
        $email = isset($request->email)?$request->email:"";
        $hienThi = isset($request->hienThi)?$request->hienThi:3;
        $tenTruongSapXep = $request->tenTruongSapXep;
        $kieuSapXep = $request->kieuSapXep;
        $arrayTen =(['0'=> 'ten','1'=> 'email']);
        $arrayKieu =(['0'=> 'asc','1'=>'desc']);
        if(isset($tenTruongSapXep)){
            $danhSach = $danhSach -> orderBy($arrayTen[$tenTruongSapXep],$arrayKieu[$kieuSapXep]);
        }
        
        $danhSach = $danhSach -> paginate($hienThi);
        return view('Administrator.User.index',compact('danhSach','tenTruongSapXep','kieuSapXep','hienThi'));
    }    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users)
    {
        //
    }
}
