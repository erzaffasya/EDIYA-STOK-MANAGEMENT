<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestimonialModel;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    public function index()
    {
        $Testimonial =  TestimonialModel::all();
        return view('admin.testimonial.index', compact('Testimonial'));
    }

    public function create()
    {
        return view('admin.testimonial.tambah');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('foto')) {
            $extension = $request->foto->extension();
            $file_name = time() . '.' . $extension;
            $directory_path = public_path('storage/Testimonial/');

            if (!File::exists($directory_path)) {
                File::makeDirectory($directory_path, $mode = 0777, true, true);
            }

            $image = Image::make($request->file('foto'));
            $image->resize(720, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save($directory_path . $file_name, 100);
            $txt = "storage/Testimonial/" . $file_name;
        } else {
            $txt = null;
        }

        $Testimonial = TestimonialModel::create([
            'isi' => $request->isi,
            'foto' => $txt,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'urut' => $request->urut,
        ]);

        return redirect()->route('testimonial.index')->with('success', 'Data Testimonial Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        return view('admin.testimonial.ubah', [
            'Testimonial' => TestimonialModel::find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $Testimonial = TestimonialModel::findOrFail($id);
        $Testimonial->isi = $request->isi;
        $Testimonial->nama = $request->nama;
        $Testimonial->jabatan = $request->jabatan;
        $Testimonial->urut = $request->urut;

        if ($request->hasFile("foto")) {
            $current_foto_path = $Testimonial->foto;
            $extension = $request->foto->extension();
            $file_name = time() . '.' . $extension;
            $directory_path = public_path('storage/Testimonial/');

            if (!File::exists($directory_path)) {
                File::makeDirectory($directory_path, $mode = 0777, true, true);
            }

            $txt = "storage/Testimonial/" . $file_name;
            $image = $request->file('foto');
            $image = Image::make($request->file('foto'));
            $image->resize(720, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save(public_path('storage/Testimonial/' . $file_name), 100);
            $Testimonial->foto = $txt;

            if ($current_foto_path && File::exists(public_path($current_foto_path))) {
                File::delete(public_path($current_foto_path));
            }
        }

        $Testimonial->save();

        return redirect()->route('testimonial.index')->with('success', 'Data Testimonial Berhasil Diubah!');
    }

    public function destroy($id)
    {
        $Testimonial = TestimonialModel::find($id);
        Storage::delete("public/Testimonial/$Testimonial->foto");
        $Testimonial->delete();

        return redirect()->route('testimonial.index')->with('success', 'Data Testimonial Berhasil Dihapus!');
    }
}
