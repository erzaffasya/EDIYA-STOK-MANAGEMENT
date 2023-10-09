<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use Illuminate\Http\Request;

class ModulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Modul  = Modul::all();
        return view('admin.kategorimodul.index', compact('Modul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.kategorimodul.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Modul = Modul::create([
            'modul' => $request->modul,
            'link' => $request->link,
            'file' => $request->file,
            'photo' => $request->photo,
            'urut' => $request->urut,
            'kategori_modul_id' => $request->kategori_modul_id,
            'tanggal' => $request->tanggal,
            'islocked' => $request->islocked
        ]);

        return redirect()->route('kategorimodul.index')
            ->with('success', 'Modul Berhasil Ditambahkan');
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
        $Modul = Modul::find($id);
        return view('admin.kategorimodul.ubah', compact('Modul'));
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
        $Modul = Modul::findOrFail($id);
        $Modul->update([
            'modul' => $request->modul,
            'link' => $request->link,
            'file' => $request->file,
            'photo' => $request->photo,
            'urut' => $request->urut,
            'kategori_modul_id' => $request->kategori_modul_id,
            'tanggal' => $request->tanggal,
            'islocked' => $request->islocked
        ]);

        return redirect()->route('kategorimodul.index')
            ->with('success', 'kategorimodul Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Modul = Modul::findOrFail($id);
        $Modul->delete();
        return redirect()->route('kategorimodul.index')
            ->with('success', 'Modul Berhasil Dihapus');
    }
}
