<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $About  = About::all();
        return view('admin.about.index', compact('About'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view ('admin.about.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $About = About::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('about.index')
            ->with('success', 'About Berhasil Ditambahkan');
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
        $About = About::find($id);
        return view('admin.about.ubah', compact('About'));
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
        $About = About::findOrFail($id);
        $About->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('about.index')
            ->with('success', 'About Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $About = About::findOrFail($id);
        $About->delete();
        return redirect()->route('about.index')
            ->with('success', 'About Berhasil Dihapus');
    }
}
