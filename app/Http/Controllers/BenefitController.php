<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use Illuminate\Http\Request;

class BenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Benefit  = Benefit::all();
        return view('admin.benefit.index', compact('Benefit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view ('admin.benefit.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Benefit = Benefit::create([
            'benefit' => $request->benefit
        ]);

        return redirect()->route('benefit.index')
            ->with('success', 'Benefit Berhasil Ditambahkan');
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
        $Benefit = Benefit::find($id);
        return view('admin.benefit.ubah', compact('Benefit'));
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
        $Benefit = Benefit::findOrFail($id);
        $Benefit->update([
            'benefit' => $request->benefit
        ]);

        return redirect()->route('benefit.index')
            ->with('success', 'benefit Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Benefit = Benefit::findOrFail($id);
        $Benefit->delete();
        return redirect()->route('benefit.index')
            ->with('success', 'Benefit Berhasil Dihapus');
    }
}
