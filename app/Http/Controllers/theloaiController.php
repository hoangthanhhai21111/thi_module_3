<?php

namespace App\Http\Controllers;

use App\Models\theloai;
use Illuminate\Http\Request;

class theloaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $theloai = theloai::all();
        return view('theloai.index',compact('theloai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('theloai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $theloai = new theloai();
        $theloai->ten_theloai = $request->ten_theloai;
        $theloai->save();
        return redirect()-> route('theloai.index');

    }
}
