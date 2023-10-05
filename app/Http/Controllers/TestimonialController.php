<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestimonialModel;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Testimonial =  TestimonialModel::all();
        return view('admin.testimonial.index', compact('Testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.testimonial.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //make validation if has foto
        if ($request->hasFile('foto')) {
            $extention = $request->foto->extension();
            $file_name = time() . '.' . $extention;
            $image = Image::make($request->file('foto'));
            $image->resize(720, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save(public_path('storage/Testimonial/' . $file_name), 100);
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

            // dd(...$request->all())
        ]);
        return redirect()->route('testimonial.index')->with('success', 'Data Testimonial Berhasil Ditambahkan!');;
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
        return view('admin.testimonial.ubah', [
            'Testimonial' => TestimonialModel::find($id)
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

        $Testimonial = TestimonialModel::findOrFail($id);
        $Testimonial->isi = $request->isi;
        $Testimonial->nama = $request->nama;
        $Testimonial->jabatan = $request->jabatan;
        $Testimonial->urut = $request->urut;

        if($request->has("foto")) {
            Storage::delete("public/Testimonial/$Testimonial->foto");
            $extention = $request->foto->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/Testimonial/" . $file_name;
            $image = $request->file('foto');
            $image = Image::make($request->file('foto'));
            $image->resize(720, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save(public_path('storage/Testimonial/' . $file_name), 100);
            $Testimonial->foto = $txt;
        }
        $Testimonial->save();
        return redirect()->route('testimonial.index')->with('success', 'Data Testimonial Berhasil Diubah!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TestimonialModel::destroy($id);
        return redirect()->route('testimonial.index')->with('success', 'Data Testimonial Berhasil Dihapus!');;
    }
}
