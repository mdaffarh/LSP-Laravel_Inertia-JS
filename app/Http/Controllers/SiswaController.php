<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('siswa.index',[
            'siswa' => Siswa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create',[
            'kelas' => Kelas::all()
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
        $data_siswa = $request->validate([
            'nis' => 'required',
            'nama_siswa' => 'required',
            'jk' => 'required',
            'alamat'=> 'required',
            'kelas_id' => 'required',
            'password' => 'required'
        ]);

        Siswa::create($data_siswa);
        return redirect('/siswa/index')->with('success','Data Siswa Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('siswa.edit',[
            'siswa' => $siswa,
            'kelas' => Kelas::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $data_siswa = $request->validate([
            'nis' => 'required',
            'nama_siswa' => 'required',
            'jk' => 'required',
            'alamat'=> 'required',
            'kelas_id' => 'required',
            'password' => 'required'
        ]);

        $siswa->update($data_siswa);
        return redirect('/siswa/index')->with('success','Data Siswa Telah Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $nilai = Nilai::where('siswa_id',$siswa->id)->first();
        if($nilai){
            return back()->with('error','Data Siswa Masih Dipakai Di Halaman Nilai');
        }

        $siswa->delete();
        return redirect('/siswa/index')->with('success','Data Siswa Telah Dihapus');
    }
}
