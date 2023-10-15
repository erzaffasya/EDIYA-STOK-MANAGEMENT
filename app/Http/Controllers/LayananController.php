<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class LayananController extends Controller
{
    public function data()
    {
        return DataTables::of(Layanan::query())->toJson();
    }
    public function index()
    {
        $Layanan = Layanan::all();
        return view('admin.layanan.index', compact('Layanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layanan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Layanan = new Layanan;
        $Layanan->nama_layanan = $request->nama_layanan;
        $Layanan->deskripsi_layanan = $request->deskripsi_layanan;
        $Layanan->icon_layanan = $request->icon_layanan;
        $Layanan->save();
        return redirect()->route('layanan.index')->with('success', 'Layanan Berhasil Ditambahkan');
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
        return view("admin.layanan.ubah", [
            "Layanan" => Layanan::findOrFail($id)
        ]);
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
                //melakukan validasi data
                $request->validate([
                    'nama_layanan' => 'required',
                    'deskripsi_layanan' => 'required',
                    'icon_layanan' => 'required',
                ]);

                //fungsi eloquent untuk mengupdate data inputan kita
                Layanan::find($id)->update($request->all());

                //jika data berhasil diupdate, akan kembali ke halaman utama
                return redirect()->route('layanan.index')
                    ->with('success', 'Layanan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                        Layanan::find($id)->delete();
                        return redirect()->route('layanan.index')
                            -> with('success', 'Layanan Berhasil Dihapus');
    }
}
