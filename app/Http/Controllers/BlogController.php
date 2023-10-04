<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Blog = Blog::all();
        return view ('admin.blog.index', compact('Blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('gambar')) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $image = Image::make($request->file('gambar'));
            $image->resize(720, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save(public_path('storage/Blog/' . $file_name), 100);
            $txt = "storage/Blog/" . $file_name;
        } else {
            $txt = null;
        }

        Blog::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $txt

        ]);
        return redirect()->route('blog.index')->with('success', 'Data Berhasil Ditambahkan');
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
        $Blog = Blog::find($id);
        return view('admin.blog.ubah', compact('Blog'));
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
        $Blog = Blog::findOrFail($id);
        $Blog->judul = $request->judul;
        $Blog->isi = $request->isi;

        if ($request->has("gambar")) {
            Storage::delete("public/Blog/$Blog->gambar");
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/Blog/" . $file_name;
            $image = $request->file('gambar');
            $image = Image::make($request->file('gambar'));
            $image->resize(720, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save(public_path('storage/Blog/' . $file_name), 100);
        } else {
            $txt = $Blog->gambar;
        }
        $Blog->gambar = $txt;
        $Blog->save();
        return redirect()->route('blog.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                $Blog = Blog::findOrFail($id);
                Storage::delete("public/Blog/$Blog->gambar");
                $Blog->delete();
                return redirect()->route('blog.index')->with('success', 'Data Berhasil Dihapus');
    }
}
