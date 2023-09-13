<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Benefit;
use App\Models\BenefitDetail;
use App\Models\Blog;
use App\Models\Career;
use App\Models\Contact;
use App\Models\Hero;
use App\Models\HeroText;
use App\Models\KategoriProduk;
use App\Models\MainProduk;
use App\Models\Member;
use App\Models\Partner;
use App\Models\Profil;
use App\Models\SubProdukDetail;
use App\Models\TentangSingkat;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index()
    {
        return view('landingpage.index');
    }

    public function member(){
        $member = Member::orderBy('urut')->get();
        return view('landingpage.member', compact('member'));
    }

}
