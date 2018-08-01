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
        $phanTrang = isset($request->phanTrang)?$request->phanTrang:5;
        $tenTruongSapXep = isset($request->tenTruongSapXep)?$request->tenTruongSapXep:0;
        $kieuSapXep = isset($request->kieuSapXep)?$request->kieuSapXep:0;
        $searchCount = cauhinh::select('ten');
        $arrayTen =(['0'=> 'id','1'=> 'ten']);
        $arrayKieu =(['0'=> 'asc','1'=>'desc']);
        $searchCount -> where('ten', 'like','%'. $request->timkiem.'%');
        $rCount = $searchCount->count();
        $cauHinh = cauhinh::where('ten', 'like','%'. $request->timkiem.'%')->orderBY($arrayTen[$tenTruongSapXep],
                            $arrayKieu[$kieuSapXep])->paginate($phanTrang);
            return view('Administrator.cauhinh.index',['cauHinh'=>$cauHinh,'kieuSapXep'=>$kieuSapXep,
                        'phanTrang'=>$phanTrang,'timKiem'=>$request->timkiem,'count'=>$rCount]);
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
