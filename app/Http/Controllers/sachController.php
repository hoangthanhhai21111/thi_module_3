<?php

namespace App\Http\Controllers;

use App\Http\Requests\SachRequest;
use App\Models\sach;
use App\Models\tagia;
use App\Models\theloai;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class sachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sach = sach::all();
        return view('sach.index',compact('sach'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $tagia = tagia::all();
        $theloai = theloai::all();
        return view('sach.create',compact('tagia', 'theloai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SachRequest $request)
    {
        $sach = new sach();
        $sach->ten_sach = $request->ten_sach;
        $sach->ma_sach = $request->ma_sach;
        $sach->so_trang = $request->so_trang;
        $sach->tac_gia = $request->tac_gia;
        $sach->the_loai = $request->the_loai;
        $sach->nam_xuat_ban = $request->nam_xuat_ban;
        $sach->save();
        return redirect()-> route('sach.index');

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
    {   $sach= sach::find($id);
        $tagia = tagia::all();
        $theloai = theloai::all();
        return view('sach.edit',compact('tagia', 'theloai','sach'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SachRequest $request, $id)
    {
          $sach =sach::find($id);
        $sach->ten_sach = $request->ten_sach;
        $sach->so_trang = $request->so_trang;
        $sach->ma_sach = $request->ma_sach;
        $sach->tac_gia = $request->tac_gia;
        $sach->the_loai = $request->the_loai;
        $sach->nam_xuat_ban = $request->nam_xuat_ban;
        $sach->save();
        return redirect()-> route('sach.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sach= sach::findOrFail($id);
        $sach->delete();
        return redirect()->route('sach.index');
    }
}
