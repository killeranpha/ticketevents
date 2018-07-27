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
        //đặt biến
        $hienThi = isset($request->hienThi)?($request->hienThi):3;
        $sapXep = $request->sapXep;
        $tenChucNang = isset($request->tenChucNang)?($request->tenChucNang):'';
        $public = isset($request->public)?($request->public):'';
        $submit = isset($request->submit)?($request->submit):'';
        $submit1 = isset($request->submit1)?($request->submit1):'';

        if($submit1 == '' && $submit == ''){ //Default
            $r = ChucNang::join('NhomChucNang','ChucNang.idNhomChucNang', '=', 'NhomChucNang.id')
                             ->select('ChucNang.*','NhomChucNang.tenNhomChucNang')
                             ->paginate($hienThi);
        }else if($submit1 != '' && $submit == ''){ //Trường hợp chỉ có submit1
            if($sapXep == ''){
                $r = ChucNang::join('NhomChucNang','ChucNang.idNhomChucNang', '=', 'NhomChucNang.id')
                ->select('ChucNang.*','NhomChucNang.tenNhomChucNang')
                ->paginate($hienThi);
            }else{
                $r = ChucNang::join('NhomChucNang','ChucNang.idNhomChucNang', '=', 'NhomChucNang.id')
                ->select('ChucNang.*','NhomChucNang.tenNhomChucNang')
                ->orderBy($sapXep,'asc')
                ->paginate($hienThi);
            }  
        }else if($submit != '' && $submit1 == ''){ //Trường hợp chỉ có submit
            if($tenChucNang != '' && $public != ''){ //nếu tồn tại 2 post
                $r = ChucNang::where([['ten','like','%'.$tenChucNang.'%'],['isPublic',$public]])
                            ->join('NhomChucNang','ChucNang.idNhomChucNang', '=', 'NhomChucNang.id')
                            ->select('ChucNang.*','NhomChucNang.tenNhomChucNang')
                            ->paginate($hienThi);
            }else if($tenChucNang != '' && $public == ''){ //nếu chỉ tồn tại post tenChucNang
                $r = ChucNang::where('ten','like','%'.$tenChucNang.'%')
                            ->join('NhomChucNang','ChucNang.idNhomChucNang', '=', 'NhomChucNang.id')
                            ->select('ChucNang.*','NhomChucNang.tenNhomChucNang')
                            ->paginate($hienThi);
            }else if($tenChucNang == '' && $public != ''){ //nếu chỉ tồn tại post public
                $r = ChucNang::where('isPublic',$public)
                            ->join('NhomChucNang','ChucNang.idNhomChucNang', '=', 'NhomChucNang.id')
                            ->select('ChucNang.*','NhomChucNang.tenNhomChucNang')
                            ->paginate($hienThi);
            }else if($tenChucNang == '' && $public == ''){
                    $r = ChucNang::where([['ten','like','%'.$tenChucNang.'%'],['isPublic',$public]])
                            ->join('NhomChucNang','ChucNang.idNhomChucNang', '=', 'NhomChucNang.id')
                            ->select('ChucNang.*','NhomChucNang.tenNhomChucNang')
                            ->paginate($hienThi);
            } 
        }else if($submit != '' && $submit1 != ''){//Trường hợp nếu có cả 2
            if($sapXep == ''){
                if($tenChucNang != '' && $public != ''){ //nếu tồn tại 2 post
                    $r = ChucNang::where([['ten','like','%'.$tenChucNang.'%'],['isPublic',$public]])
                             ->join('NhomChucNang','ChucNang.idNhomChucNang', '=', 'NhomChucNang.id')
                             ->select('ChucNang.*','NhomChucNang.tenNhomChucNang')
                             ->paginate($hienThi);
                }else if($tenChucNang != '' && $public == ''){ //nếu chỉ tồn tại post tenChucNang
                    $r = ChucNang::where('ten','like','%'.$tenChucNang.'%')
                             ->join('NhomChucNang','ChucNang.idNhomChucNang', '=', 'NhomChucNang.id')
                             ->select('ChucNang.*','NhomChucNang.tenNhomChucNang')
                             ->paginate($hienThi);
                }else if($tenChucNang == '' && $public != ''){ //nếu chỉ tồn tại post public
                    $r = ChucNang::where('isPublic',$public)
                             ->join('NhomChucNang','ChucNang.idNhomChucNang', '=', 'NhomChucNang.id')
                             ->select('ChucNang.*','NhomChucNang.tenNhomChucNang')
                             ->paginate($hienThi);
                }else if($tenChucNang == '' && $public == ''){
                        $r = ChucNang::where([['ten','like','%'.$tenChucNang.'%'],['isPublic',$public]])
                             ->join('NhomChucNang','ChucNang.idNhomChucNang', '=', 'NhomChucNang.id')
                             ->select('ChucNang.*','NhomChucNang.tenNhomChucNang')
                             ->paginate($hienThi);
                } 
            }else{
                if($tenChucNang != '' && $public != ''){ //nếu tồn tại 2 post
                    $r = ChucNang::where([['ten','like','%'.$tenChucNang.'%'],['isPublic',$public]])
                             ->join('NhomChucNang','ChucNang.idNhomChucNang', '=', 'NhomChucNang.id')
                             ->select('ChucNang.*','NhomChucNang.tenNhomChucNang')
                             ->orderBy($sapXep,'asc')
                             ->paginate($hienThi);
                }else if($tenChucNang != '' && $public == ''){ //nếu chỉ tồn tại post tenChucNang
                    $r = ChucNang::where('ten','like','%'.$tenChucNang.'%')
                             ->join('NhomChucNang','ChucNang.idNhomChucNang', '=', 'NhomChucNang.id')
                             ->select('ChucNang.*','NhomChucNang.tenNhomChucNang')
                             ->orderBy($sapXep,'asc')
                             ->paginate($hienThi);
                }else if($tenChucNang == '' && $public != ''){ //nếu chỉ tồn tại post public
                    $r = ChucNang::where('isPublic',$public)
                             ->join('NhomChucNang','ChucNang.idNhomChucNang', '=', 'NhomChucNang.id')
                             ->select('ChucNang.*','NhomChucNang.tenNhomChucNang')
                             ->orderBy($sapXep,'asc')
                             ->paginate($hienThi);
                }else if($tenChucNang == '' && $public == ''){
                        $r = ChucNang::where([['ten','like','%'.$tenChucNang.'%'],['isPublic',$public]])
                             ->join('NhomChucNang','ChucNang.idNhomChucNang', '=', 'NhomChucNang.id')
                             ->select('ChucNang.*','NhomChucNang.tenNhomChucNang')
                             ->paginate($hienThi);
                } 
            }
        }
        //Trả kết quả về view
        return view('hieund.hienthi.danhsachchucnang',compact('r','sapXep','hienThi','submit','tenChucNang','public'));
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
}
