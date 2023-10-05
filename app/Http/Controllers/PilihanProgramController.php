<?php

namespace App\Http\Controllers;

use App\Models\PilihanProgram;
use Illuminate\Http\Request;

class PilihanProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PilihanProgam = PilihanProgram::all();
        return view('admin.pilihanprogram.index', compact('PilihanProgam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pilihanprogram.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PilihanProgram::create([
            'namapaket' => $request->namapaket,
            'harga' => $request->harga,
            'benefit1' => $request->benefit1,
            'benefit2' => $request->benefit2,
            'benefit3' => $request->benefit3,
        ]);

        return redirect()->route('pilihanprogram.index')->with('success', 'Pilihan Program berhasil ditambahkan');
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
        return view("admin.pilihanprogram.ubah", [
            "PilihanProgram" => PilihanProgram::findOrFail($id)
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
    $pilprog = PilihanProgram::findOrFail($id);
    $pilprog->namapaket = $request->namapaket;
    $pilprog->harga = $request->harga;
    $pilprog->benefit1 = $request->benefit1;
    $pilprog->benefit2 = $request->benefit2;
    $pilprog->benefit3 = $request->benefit3;

    $pilprog->save();

    return redirect()->route('pilihanprogram.index')->with('success', 'Pilihan Program berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pilprog = PilihanProgram::findOrFail($id);
        $pilprog->delete();

        return redirect()->route('pilihanprogram.index')->with('success', 'Pilihan Program berhasil dihapus');
    }
}
