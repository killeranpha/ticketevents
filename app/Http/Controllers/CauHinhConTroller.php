<?php

namespace App\Http\Controllers;

use App\cauhinh;
use Illuminate\Http\Request;

class CauHinhConTroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
            $cauHinh = cauhinh::where('ten', 'like','%'. $request->ten.'%')->orderBY('id')->paginate(5);
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
     * @param  \App\cauhinh  $cauhinh
     * @return \Illuminate\Http\Response
     */
    public function show(cauhinh $cauhinh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cauhinh  $cauhinh
     * @return \Illuminate\Http\Response
     */
    public function edit(cauhinh $cauhinh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cauhinh  $cauhinh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cauhinh $cauhinh)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cauhinh  $cauhinh
     * @return \Illuminate\Http\Response
     */
    public function destroy(cauhinh $cauhinh)
    {
        //
    }
}
