<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        $mapel = Mapel::all();
        return view('siswa.add', compact('kelas', 'mapel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'kelas_id' => 'required',
            'mapel_id' => 'required'
        ]);

        $siswa = Siswa::create($request->all());
        return redirect('siswa');
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
    public function edit($id)
    {
        $kelas = Kelas::all();
        $mapel = Mapel::all();
        $s = Siswa::find($id);
        return view('siswa.edit', compact('s', 'kelas', 'mapel'));
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
        $validate = $request->validate([
            'nama' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'kelas_id' => 'required',
            'mapel_id' => 'required'
        ]);

        $siswa->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'kelas_id' => $request->kelas_id,
            'mapel_id' => $request->mapel_id,
        ]);
        return redirect('siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect('siswa');
    }
}
