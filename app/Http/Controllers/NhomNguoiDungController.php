<?php

namespace App\Http\Controllers;

use App\NhomNguoiDung;
use Illuminate\Http\Request;

class NhomNguoiDungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function test(Request $request){
        
    }

    public function index(Request $request)
    {
        // Lấy dữ liệu
        $sapXep = $request->sapXep;
        $hienThi =isset($request->hienThi)?$request->hienThi:3;
        $timKiem = isset($request->timKiem)?$request->timKiem:"";
        if($timKiem == ""){//Không có $timKiem
            //xử lý
                if($sapXep == 1){// Sắp xếp theo tên tăng dần
                    $r = NhomNguoiDung::orderBy('ten','asc')->paginate($hienThi);
                }else if($sapXep == 2){//Sắp xếp theo thứ tự tăng dần
                    $r = NhomNguoiDung::orderBy('thuTu','asc')->paginate($hienThi);
                }else{
                    $r = NhomNguoiDung::paginate(5);
                }
        }else{//Có $timKiem
                if($sapXep == 1){
                    // Sắp xếp theo tên tăng dần
                    $r = NhomNguoiDung::where('ten','like','%'.$request->timKiem.'%')
                                        ->orWhere('thuTu',$request->timKiem)
                                        ->orderBy('ten','asc')
                                        ->paginate($hienThi);
                }else{
                    //Sắp xếp theo thứ tự tăng dần
                    $r = NhomNguoiDung::where('ten','like','%'.$request->timKiem.'%')
                                        ->orWhere('thuTu',$request->timKiem)
                                        ->orderBy('thuTu','asc')
                                        ->paginate($hienThi);
                }
        }
        return view('chucvb.hienThi.danhSachNhomNguoiDung',['r'=>$r,'sapXep'=> $sapXep,'hienThi'=>$hienThi,'timKiem'=>$timKiem]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
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
