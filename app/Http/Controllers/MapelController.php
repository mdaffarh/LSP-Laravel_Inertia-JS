<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Mengajar;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mapel.index',[
            'mapel' => Mapel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mapel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_mapel = $request->validate([
            'nama_mapel' => 'required'
        ]);

        Mapel::create($data_mapel);
        return redirect('/mapel/index')->with('success','Mata Pelajaran Telah Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function show(Mapel $mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function edit(Mapel $mapel)
    {
        return view('mapel.edit',[
            'mapel' => $mapel
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mapel $mapel)
    {
        $data_mapel = $request->validate([
            'nama_mapel' => 'required'
        ]);
        $mapel->update($data_mapel);
        return redirect('/mapel/index')->with('success','Data Mata Pelajaran Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mapel $mapel)
    {
        $mengajar = Mengajar::where('mapel_id',$mapel->id)->first();

        if($mengajar){
            return back()->with('error',"$mapel->nama_mapel Masih Digunakan Di Menu Mengajar");
        }

        $mapel->delete();
        return back()->with('success','Data Mata Pelajaran Berhasil Dihapus');
    }
}
