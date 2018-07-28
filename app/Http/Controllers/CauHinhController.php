<?php

namespace App\Http\Controllers;

use App\CauHinh;
use Illuminate\Http\Request;

class CauHinhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kieuSapXep = 'id';
        $phanTrang = '5';
        if($request->input('property') == 2){
            $kieuSapXep = 'ten';
        }
        if($request->input('paginate')){
            $phanTrang = $request->input('paginate');
        }
        $cauHinh = cauhinh::where('ten', 'like','%'. $request->ten.'%')->orderBY($kieuSapXep,'asc')->paginate($phanTrang);
            return view('admin.congcu.danhsach.danhsachcauhinh',['cauHinh'=>$cauHinh]);
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
     * @param  \App\CauHinh  $cauHinh
     * @return \Illuminate\Http\Response
     */
    public function show(CauHinh $cauHinh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CauHinh  $cauHinh
     * @return \Illuminate\Http\Response
     */
    public function edit(CauHinh $cauHinh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CauHinh  $cauHinh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CauHinh $cauHinh)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CauHinh  $cauHinh
     * @return \Illuminate\Http\Response
     */
    public function destroy(CauHinh $cauHinh)
    {
        //
    }
}
