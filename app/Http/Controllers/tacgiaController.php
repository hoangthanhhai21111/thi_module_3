<?php

namespace App\Http\Controllers;

use App\Models\tagia;
use Illuminate\Http\Request;

class tacgiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tacgia = tagia::all();
        return view('tacgia.index',compact('tacgia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('tacgia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tacgia = new tagia();
        $tacgia->ten_tacgia = $request->ten_tacgia;
        $tacgia->save();
        return redirect()-> route('tacgia.index');

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
    {   $tacgia= tagia::find($id);
        return view('tacgia.edit',compact('tacgia'));
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
          $tacgia =tagia::find($id);
        $tacgia->ten_tacgia = $request->ten_tacgia;
        $tacgia->save();
        return redirect()-> route('tacgia.index');
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
