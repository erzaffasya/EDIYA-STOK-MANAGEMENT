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
        $HeroText = HeroText::all();
        $Benefit = Benefit::get()->first();
        $BenefitDetail = BenefitDetail::all();
        $Hero = Hero::orderBy('urut')->get();
        $TentangSingkat = TentangSingkat::find(1);
        $Partner = Partner::all();
        $KategoriProduk = KategoriProduk::all();
        return view('landingpage.index',compact('HeroText','Benefit','BenefitDetail', 'Hero', 'TentangSingkat','Partner', 'KategoriProduk'));
    }

    public function member(){
        $member = Member::orderBy('urut')->get();
        return view('landingpage.member', compact('member'));
    }

}
