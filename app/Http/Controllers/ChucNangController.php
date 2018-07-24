<?php

namespace App\Http\Controllers;

use App\ChucNang;
use App\NhomChucNang;
use Illuminate\Http\Request;

class ChucNangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //lay du lieu tu bang chuc nang va bang nhom chuc nang
        $rCN = ChucNang::all();
        $rNCN = NhomChucNang::all();
        //truyen qua trang view 
        return view('admin.congcu.danhsach.danhsachchucnang',['rCN'=>$rCN,'rNCN'=>$rNCN]);
    }

    /**
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
     * @param  \App\ChucNang  $chucNang
     * @return \Illuminate\Http\Response
     */
    public function show(ChucNang $chucNang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChucNang  $chucNang
     * @return \Illuminate\Http\Response
     */
    public function edit(ChucNang $chucNang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChucNang  $chucNang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChucNang $chucNang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChucNang  $chucNang
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChucNang $chucNang)
    {
        //
    }
    //chuc nang tim kiem theo ten hoac isPublic
    public function getSearch(Request $request){
        //lấy dữ liệu trong bảng NhomChucNang
        $rNCN = NhomChucNang::all();
        //search trong bảng chucnang ở 2 cột ten hoặc isPublic
        $rCN = chucnang::where('ten','like','%'.$request->key.'%')//Có thể nhập giống $request->key là name
                            ->orWhere('isPublic',$request->key) //nhap dung moi tim
                            ->get(); //lấy kết quả tìm thấy
        //trả kết quả về view có thể dùng truyền bằng [] hoặc compact
        return view('admin.congcu.danhsach.resultDanhSachChucNang',compact('rCN','rNCN')); //compact : truyen bien
    }
}
