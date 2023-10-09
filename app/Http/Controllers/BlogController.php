<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    public function index()
    {
        $Blog = Blog::all();
        return view('admin.blog.index', compact('Blog'));
    }

    public function create()
    {
        return view('admin.blog.tambah');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('gambar')) {
            $extension = $request->gambar->extension();
            $file_name = time() . '.' . $extension;
            $directory_path = public_path('storage/Blog/');

            if (!File::exists($directory_path)) {
                File::makeDirectory($directory_path, $mode = 0777, true, true);
            }

            $image = Image::make($request->file('gambar'));
            $image->resize(720, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save($directory_path . $file_name, 100);
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

    public function edit($id)
    {
        $Blog = Blog::find($id);
        return view('admin.blog.ubah', compact('Blog'));
    }

    public function update(Request $request, $id)
    {
        $Blog = Blog::findOrFail($id);
        $Blog->judul = $request->judul;
        $Blog->isi = $request->isi;

        if ($request->has("gambar")) {
            $current_gambar_path = $Blog->gambar;
            $extension = $request->gambar->extension();
            $file_name = time() . '.' . $extension;
            $directory_path = public_path('storage/Blog/');

            if (!File::exists($directory_path)) {
                File::makeDirectory($directory_path, $mode = 0777, true, true);
            }

            $txt = "storage/Blog/" . $file_name;
            $image = $request->file('gambar');
            $image = Image::make($request->file('gambar'));
            $image->resize(720, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save(public_path('storage/Blog/' . $file_name), 100);
            $Blog->gambar = $txt;

            if ($current_gambar_path && File::exists(public_path($current_gambar_path))) {
                File::delete(public_path($current_gambar_path));
            }
        }

        $Blog->save();
        return redirect()->route('blog.index')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        $Blog = Blog::findOrFail($id);
        Storage::delete("public/Blog/$Blog->gambar");
        $Blog->delete();
        return redirect()->route('blog.index')->with('success', 'Data Berhasil Dihapus');
    }
}
