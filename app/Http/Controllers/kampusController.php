<?php

namespace App\Http\Controllers;
use App\Models\kampus;
use Illuminate\Http\Request;


class kampusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kampus= kampus::all();
        //return $kampus;
        return view('kampus',['kampus' => $kampus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        return view('tambah');

    }

    /**ss
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Menangkap Data Yang Diinput
$nbi = $request->get('nbi');
$nama_mhs = $request->get('nama_mhs');
//Menyimpan data kedalam tabel
$save_mhs = new \App\Models\kampus();
$save_mhs->nbi = $nbi;
$save_mhs->nama_mhs = $nama_mhs;
$save_mhs->save();
return redirect()->route('kampus.index');
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
        $mhs_edit = \App\Models\kampus::findOrFail($id);
return view('edit', ['kampus' => $mhs_edit]);
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
        $kmps = kampus::findOrFail($id);
$kmps->nama_mhs = $request->get('nama_mhs');
$kmps->nbi = $request->get('nbi');
$kmps   ->save();
return redirect()->route('kampus.index', [$id]);
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
