<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NhomNguoiDung;
class NhomNguoiDungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Lấy dữ liệu
        $tenTruongSapXep = $request->tenTruongSapXep;
        $kieuSapXep = $request->kieuSapXep;
        $hienThi =isset($request->hienThi)?$request->hienThi:3;
        $timKiem = isset($request->timKiem)?$request->timKiem:"";
        //select
        $select = NhomNguoiDung::select('thuTu','ten');
        $selectCount = NhomNguoiDung::select('thuTu','ten');
        //Xử lý
        $arrayTen =(['0'=> 'thuTu','1'=> 'ten']);
        $arrayKieu =(['0'=> 'asc','1'=>'desc']);
            //Tìm kiếm
            if($timKiem == ""){
                $r = $select;
            }else{
                $r = $select -> where('ten','like',"%".$timKiem."%")
                            -> orWhere('thuTu',$timKiem);
                $selectCount -> where('ten','like',"%".$timKiem."%")
                -> orWhere('thuTu',$timKiem);
            }
            //Sắp xếp -- Chỉ sắp xếp theo ten hoặc thuTu
            if(isset($tenTruongSapXep)){
             $r = $r -> orderBy($arrayTen[$tenTruongSapXep],$arrayKieu[$kieuSapXep]);
            }
            //Phân trang
            $r = $r -> paginate($hienThi);
            $rCount = $selectCount -> count();        
        return view('Administrator.NhomNguoiDung.index',compact('r','hienThi','tenTruongSapXep','kieuSapXep','timKiem','rCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrator.NhomNguoiDung.create');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
