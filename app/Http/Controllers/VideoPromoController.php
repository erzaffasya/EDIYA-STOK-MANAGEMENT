<?php

namespace App\Http\Controllers;

use App\Models\VideoPromo;
use Illuminate\Http\Request;

class VideoPromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $VideoPromo  = VideoPromo::all();
        return view('admin.videopromos.index', compact('VideoPromo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view ('admin.videopromos.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $VideoPromo = VideoPromo::create([
            'judul' => $request->judul,
            'subjudul' => $request->subjudul,
            'deskripsi' => $request->deskripsi,
            'video'=> $request->video
        ]);

        return redirect()->route('videopromo.index')
            ->with('success', 'Video Promo Berhasil Ditambahkan');
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
        $VideoPromo = VideoPromo::find($id);
        return view('admin.videopromos.ubah', compact('VideoPromo'));
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
        $VideoPromo = VideoPromo::findOrFail($id);
        $VideoPromo->update([
            'judul' => $request->judul,
            'subjudul' => $request->subjudul,
            'deskripsi' => $request->deskripsi,
            'video'=> $request->video
        ]);

        return redirect()->route('videopromo.index')
            ->with('success', 'Video Promo Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $VideoPromo = VideoPromo::findOrFail($id);
        $VideoPromo->delete();
        return redirect()->route('videopromo.index')
            ->with('success', 'Video Promo Berhasil Dihapus');
    }
}
