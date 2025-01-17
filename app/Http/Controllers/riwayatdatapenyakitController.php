<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kelurahan;
use App\kecamatan;
use App\datapenyakit;
use Illuminate\Support\Facades\Auth;

class riwayatdatapenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $akun =dataakun::where('nama_instansi', Auth::user()->name)->get();
        foreach ($akun as $key => $value) {
           $id = $value["id"];
        } 
        $datapenyakit = datapenyakit::where('status','Belum dikonfirmasi')->where('id_instansi', $id)->get();
        $kelurahan = kelurahan::all();
        $kecamatan = kecamatan::all();
        return view('riwayat.riwayatdatapenyakit', compact('datapenyakit', 'kelurahan', 'kecamatan'));
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
