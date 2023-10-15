<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function kelas()
    {
        return view('admin.kelas.course');
    }
    public function detailKelas()
    {
        return view('admin.kelas.course-detail');
    }
}
