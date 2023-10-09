<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class HeroController extends Controller
{
    public function index()
    {
        $Hero = Hero::all();
        return view('admin.hero.index', compact('Hero'));
    }

    public function create()
    {
        return view('admin.hero.tambah');
    }

    public function store(Request $request)
    {


        if ($request->hasFile('foto')) {
            $extension = $request->foto->extension();
            $file_name = time() . '.' . $extension;
            $directory_path = public_path('storage/Hero/');

            if (!File::exists($directory_path)) {
                File::makeDirectory($directory_path, $mode = 0777, true, true);
            }

            $image = Image::make($request->file('foto'));
            $image->resize(720, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save($directory_path . $file_name, 100);
            $txt = "storage/Hero/" . $file_name;
        } else {
            $txt = null;
        }

        $Hero = Hero::create([
            'title' => $request->title,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'urut' => $request->urut,
            'foto' => $txt
        ]);

        return redirect()->route('hero.index')
            ->with('success', 'Hero Berhasil Ditambahkan');
    }

    public function show($id)
    {
        // $Hero =  Hero::find($id);
        // return view('admin.hero.DetailHero.index', compact('Hero', 'DetailHero'));
    }


    public function edit($id)
    {
        $Hero = Hero::find($id);
        return view('admin.hero.ubah', compact('Hero'));
    }

    public function update(Request $request, $id)
    {
        $Hero = Hero::findOrFail($id);
        $Hero->title = $request->title;
        $Hero->judul = $request->judul;
        $Hero->deskripsi = $request->deskripsi;
        $Hero->urut = $request->urut;

        if ($request->has("foto")) {
            $current_foto_path = $Hero->foto;
            $extention = $request->foto->extension();
            $file_name = time() . '.' . $extention;
            $directory_path = public_path('storage/Hero/');

            if (!File::exists($directory_path)) {
                File::makeDirectory($directory_path, $mode = 0777, true, true);
            }

            $txt = "storage/Hero/" . $file_name;
            $image = $request->file('foto');
            $image = Image::make($request->file('foto'));
            $image->resize(720, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save(public_path('storage/Hero/' . $file_name), 100);
            $Hero->foto = $txt;

            if ($current_foto_path && File::exists(public_path($current_foto_path))) {
                File::delete(public_path($current_foto_path));
            }
        }

        $Hero->save();
        return redirect()->route('hero.index')
            ->with('success', 'Hero Berhasil Diubah');
    }

    public function destroy($id)
    {
        $Hero = Hero::find($id);
        Storage::delete("public/Hero/$Hero->foto");
        $Hero->delete();
        return redirect()->route('hero.index')
            ->with('success', 'Hero Berhasil Dihapus');
    }
}
