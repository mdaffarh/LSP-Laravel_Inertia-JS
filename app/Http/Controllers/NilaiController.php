<?php

namespace App\Http\Controllers;

use App\Models\Mengajar;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('nilai.index',[
            'nilai' => Nilai::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nilai.create',[
            'mengajar' => Mengajar::all(),
            'siswa' => Siswa::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_nilai = $request->validate([
            'mengajar_id' => 'required',
            'siswa_id' => 'required',
            'uh' => 'required',
            'uts' => 'required',
            'uas' => 'required'
        ]);
        $data_nilai['na'] = round(($request->uh + $request->uts + $request->uas) / 3 , 2) ;

        Nilai::create($data_nilai);
        return redirect('/nilai/index')->with('success','Data Nilai Telah Ditambahkan');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show(Nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit(Nilai $nilai)
    {
        return view('nilai.edit',[
            'nilai' => $nilai,
            'mengajar' => Mengajar::all(),
            'siswa' => Siswa::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nilai $nilai)
    {
        $data_nilai = $request->validate([
            'mengajar_id' => 'required',
            'siswa_id' => 'required',
            'uh' => 'required',
            'uts' => 'required',
            'uas' => 'required'
        ]);
        $data_nilai['na'] = round(($request->uh + $request->uts + $request->uas) / 3 , 2) ;

        $nilai->update($data_nilai);
        return redirect('/nilai/index')->with('success','Data Nilai Telah Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nilai $nilai)
    {
        $nilai->delete();
        return redirect('/nilai/index')->with('success','Data Nilai Telah Dihapus');
    }
}
