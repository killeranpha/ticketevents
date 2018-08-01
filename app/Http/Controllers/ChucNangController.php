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
    public function index(Request $request)
    {
        $tenTruongSapXep = $request->tenTruongSapXep;
        $kieuSapXep = $request->kieuSapXep;
        $hienThi = isset($request->hienThi)?$request->hienThi:3;
        $tenChucNang = isset($request->tenChucNang)?$request->tenChucNang:'';
        $tenNhomChucNang = isset($request->tenNhomChucNang)?$request->tenNhomChucNang:'';
        $timKiem = isset($request->timKiem)?$request->timKiem:'';
        //mang de sap xep
        $arrayTen = ['0'=>'thuTu','1'=>'ten','2'=>'tenNhomChucNang'];
        $arrayKieu = ['0'=>'asc','1'=>'desc'];
        //dat bien toan cuc
        $select = ChucNang::join('NhomChucNang','ChucNang.idNhomChucNang', '=', 'NhomChucNang.id')
                    ->select('ChucNang.*','NhomChucNang.tenNhomChucNang');
        $selectCount = ChucNang::join('NhomChucNang','ChucNang.idNhomChucNang', '=', 'NhomChucNang.id')
        ->select('ChucNang.*','NhomChucNang.tenNhomChucNang');
        //Nếu không tồn tại các input nhập tìm kiếm thì để default
        if($tenChucNang == '' && $tenNhomChucNang == ''){
            $r = $select;
        }else{
            $r = $select ->Where([['ten','like','%'.$request->tenChucNang.'%'],['tenNhomChucNang','like','%'.$request->tenNhomChucNang.'%']]);
            $selectCount ->Where([['ten','like','%'.$request->tenChucNang.'%'],['tenNhomChucNang','like','%'.$request->tenNhomChucNang.'%']]);
        }
        //Sắp xếp
        if(isset($tenTruongSapXep)){
            $r = $select->orderBy($arrayTen[$tenTruongSapXep],$arrayKieu[$kieuSapXep]);
        }
        //phân trang
        $r = $select->paginate($hienThi);
        $CountR = $selectCount -> count();
        return view('Administrator.Chucnang.index',compact('r','tenTruongSapXep','kieuSapXep','timKiem','hienThi','CountR','tenChucNang','tenNhomChucNang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.chucnang.create');
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
}
