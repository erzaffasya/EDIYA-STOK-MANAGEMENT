<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class MemberController extends Controller
{
    public function index()
    {
        $Member = Member::all();
        return view('admin.member.index', compact('Member'));
    }

    public function create()
    {
        return view('admin.member.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'ft' => 'required'
        ]);

        $txt = null;
        if ($request->foto != null) {
            $extention = $request->foto->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/Member/" . $file_name;
            $image = $request->file('foto');
            $image = Image::make($request->file('foto'));
            $image->resize(720, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save(public_path('storage/Member/' . $file_name), 80);
        } else {
            $file_name = null;
        }

        $Member = Member::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'urut' => $request->urut,
            'foto' => $txt
        ]);


        return redirect()->route('member.index')
            ->with('success', 'Member Berhasil Ditambahkan');
    }

    public function show($id)
    {
        // $Member =  Member::find($id);
        // return view('admin.member.DetailMember.index', compact('Member', 'DetailMember'));
    }


    public function edit($id)
    {
        $Member = Member::find($id);
        return view('admin.member.ubah', compact('Member'));
    }

    public function update(Request $request, $id)
    {
        $Member = Member::findOrFail($id);
        $Member->nama = $request->nama;
        $Member->jabatan = $request->jabatan;
        $Member->urut = $request->urut;

        if ($request->has("foto")) {
            Storage::delete("public/Member/$Member->foto");
            $extention = $request->foto->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/Member/" . $file_name;
            $image = $request->file('foto');
            $image = Image::make($request->file('foto'));
            $image->resize(720, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save(public_path('storage/Member/' . $file_name), 80);
            $Member->foto = $txt;
        }
        $Member->save();
        return redirect()->route('member.index')
            ->with('success', 'Member Berhasil Diubah');
    }

    public function destroy($id)
    {
        $Member = Member::findOrFail($id);
        Storage::delete("public/Member/$Member->foto");
        $Member->delete();
        return redirect()->route('member.index')
            ->with('success', 'Member Berhasil Dihapus');
    }
}
