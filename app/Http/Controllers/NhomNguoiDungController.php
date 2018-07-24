<?php

namespace App\Http\Controllers;

use App\NhomNguoiDung;
use Illuminate\Http\Request;

class NhomNguoiDungController extends Controller
{   
    //search
    public function searchNhomNguoiDung(Request $request){
        $r = NhomNguoiDung::where('ten','like','%'.$request->timKiem.'%')
                                ->orWhere('thuTu',$request->timKiem)
                                ->get();
        return view('admin.ketquasearch.ketQuaSearchNhomNguoiDung',compact('r'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $r = NhomNguoiDung::paginate(2);
        return view('admin.nguoidung.danhSachNhomNguoiDung',['danhSachNhomNguoiDung' => $r]);
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
     * @param  \App\NhomNguoiDung  $nhomNguoiDung
     * @return \Illuminate\Http\Response
     */
    public function show(NhomNguoiDung $nhomNguoiDung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NhomNguoiDung  $nhomNguoiDung
     * @return \Illuminate\Http\Response
     */
    public function edit(NhomNguoiDung $nhomNguoiDung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NhomNguoiDung  $nhomNguoiDung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NhomNguoiDung $nhomNguoiDung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NhomNguoiDung  $nhomNguoiDung
     * @return \Illuminate\Http\Response
     */
    public function destroy(NhomNguoiDung $nhomNguoiDung)
    {
        //
    }
}
