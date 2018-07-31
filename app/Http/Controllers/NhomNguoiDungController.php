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
        $thuTu = isset($request->thuTu)?$request->thuTu:0;
        $ten = isset($request->ten)?$request->ten:"";
        $hienThi =isset($request->hienThi)?$request->hienThi:3;
        $timKiem = isset($request->timKiem)?$request->timKiem:"";
        //select
        $select = NhomNguoiDung::select('thuTu','ten');
        $countSelect  = count(NhomNguoiDung::all());
        //Xử lý
            //Tìm kiếm
            if($timKiem == ""){
                $r = $select;
            }else{
                $r = $select -> where('ten','like',"%".$timKiem."%")
                            -> orWhere('thuTu',$timKiem);
            }
            
            //Sắp xếp -- Chỉ sắp xếp theo ten hoặc thuTu
            if($ten ==""){
                if($thuTu == 0){
                    $r = $r->orderBy('thuTu','asc');
                }else{
                    $r = $r->orderBy('thuTu','desc');
                }
            }else{
                if($ten == 0){
                    $r = $r->orderBy('ten','asc');
                }else{
                    $r = $r->orderBy('ten','desc');
                }
            }
            //Phân trang
            $countWhere = count($r->get());
            $r = $r -> paginate($hienThi);        
        return view('Administrator.NhomNguoiDung.index',compact('r','hienThi','thuTu','ten','timKiem','countSelect','countWhere'));
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
