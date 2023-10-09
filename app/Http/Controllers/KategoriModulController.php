<?php

namespace App\Http\Controllers;

use App\Models\KategoriModul;
use Illuminate\Http\Request;

class KategoriModulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $KategoriModul  = KategoriModul::all();
        return view('admin.kategorimodul.index', compact('KategoriModul'));
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
        $KategoriModul = KategoriModul::create([
            'kategori_modul' => $request->kategori_modul,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('kategorimodul.index')
            ->with('success', 'KategoriModul Berhasil Ditambahkan');
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
        $KategoriModul = KategoriModul::find($id);
        return view('admin.kategorimodul.ubah', compact('KategoriModul'));
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
        $KategoriModul = KategoriModul::findOrFail($id);
        $KategoriModul->update([
            'kategori_modul' => $request->kategori_modul,
            'deskripsi' => $request->deskripsi
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
        $KategoriModul = KategoriModul::findOrFail($id);
        $KategoriModul->delete();
        return redirect()->route('kategorimodul.index')
            ->with('success', 'KategoriModul Berhasil Dihapus');
    }
}
