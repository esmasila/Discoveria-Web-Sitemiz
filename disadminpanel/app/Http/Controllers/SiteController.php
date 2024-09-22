<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Mekan;
use App\Models\Bolge;
use App\Models\Sayfa;
use App\Models\Blog;
use App\Models\IletisimFormu;
use App\Models\IletisimBilgisi;
use View;

class SiteController extends Controller
{
    public function __construct()
    {
        $populerMekanlar = Mekan::where('populer',1)->get();
        $paylas['populerMekanlar'] = $populerMekanlar;
        View::share($paylas);
    }
    // Anasayfa
                    // SiteController.php{{  }}


public function index()
{
    $kategoriler = Kategori::all();
    $bolgeler = Bolge::where('durum', 1)->get();

    $sayfa = new Sayfa;
    return view('site.anasayfa', compact('bolgeler', 'sayfa','kategoriler'));
}


public function show($id)
{
    $bolgeler = Bolge::where('durum', 1)->get();
    $sayfa = Sayfa::findOrFail($id);
    return view('site.sayfalar', compact('bolgeler', 'sayfa'));
}


    // Bölge Detayları
    public function bolgeDetay($bolgeID){
        $bolgeler = Bolge::all();
        $mekanlar = Mekan::where('bolge_id', $bolgeID)->get();
        return view('site.destinationDetails', compact('mekanlar','bolgeler'));
    }

    // Destination Sayfası
    public function destination(){
        $bolgeler = Bolge::all();

        return view('site.destination', compact('bolgeler'));
    }

    public function destinationDetails()
    {
        $mekan=Mekan::all;
        return view('site.destinationDetails' ,compact('mekan'));
    }

    public function showAltBolgeler($bolgeID)
    {
        $ustBolge = Bolge::findOrFail($bolgeID);

        $altBolgeler = Bolge::where('parent_id', $bolgeID)->get();

        return view('site.destinationDetails', compact('ustBolge', 'altBolgeler'));
    }



    public function mekancik(){
        $mekanlar = Mekan::all();
        $bolge = Bolge::first();

        return view('site.mekanlars', compact('mekanlar','bolge'));
    }

    public function mekancikdetay(){
        $mekanlar = Mekan::all();
        $bolge = Bolge::first();

        return view('site.mekanlarsdetails', compact('mekanlar','bolge'));
    }

    public function showmekancik($bolgeID)
    {
        $ustBolge = Bolge::findOrFail($bolgeID);
        $bolge=Bolge::all();
        $altBolgeler = Bolge::where('parent_id', $bolgeID)->get();

        return view('site.mekanlarsdetails', compact('ustBolge', 'altBolgeler','bolge'));
    }



    // Destination Detayları
    // public function destinationDetail(${{  }}nID){
    //     $bolgeler = Bolge::all();
    //     $mekan = Mekan::find($mekanID); // Mekanı bul
    //     return view('site.destinationDetails', compact('mekan','bolgeler'));
    // }

    // Hakkımızda Sayfası
    public function hakkimizda(){
        return view('site.hakkimizda');
    }

    public function sayfamm()
    {

        $sayfalar = Sayfa::all();
        $sayfa=new Sayfa;
        $lastRecord2 = Sayfa::latest('id')->first();
        return view('site.sayfalar',compact('sayfalar','sayfa','lastRecord2'));

    }


    // public function sayfam($id)
    // {

    //     $sayfalar = Sayfa::all();
    //     $sayfa = Sayfa::findOrFail($id);

    // }







    public function blogIndex()
    {

        $blogs = Blog::all();
        return view('site.blogs', compact('blogs'));
    }

    // Belirli bir blogun detaylarını gösterme fonksiyonu
    public function blogDetail($id)
    {
        $blog = Blog::findOrFail($id);
        $blogs = Blog::all();
        return view('site.blogDetails', compact('blog','blogs'));
    }





    public function contact()
    {

        $contactInfos = IletisimBilgisi::all();
        $lastRecord = IletisimBilgisi::latest('id')->first();


        return view('site.contact', compact('contactInfos','lastRecord'));
    }

    public function store(Request $request)
    {

        $form = new IletisimFormu();
        $form->ad_soyad = $request->ad_soyad;
        $form->email = $request->email;
        $form->konu = $request->konu;
        $form->mesaj = $request->mesaj;
        $form->save();


        return redirect()->route('contacts.index')->with('success', 'Mesajınız başarıyla gönderildi!');
    }

                    // Mekanlar Sayfası
    public function mekanlarByBolge($bolgeID)
    {
        $bolge = Bolge::findOrFail($bolgeID);
        $mekanlar = Mekan::where('bolge_id', $bolgeID)->get();
        return view('site.mekanlars', compact('mekanlar', 'bolge'));
    }

    public function mekanlarByKategori($kategoriID)
    {
        $kategori = Kategori::findOrFail($kategoriID);
        $mekanlar = Mekan::where('kategori_id', $kategoriID)->get();
        return view('site.mekanlars', compact('mekanlar', 'kategori'));
    }


    // Mekan Detay Sayfası
    public function mekanDetay($mekanID)
    {

        $mekan = Mekan::findOrFail($mekanID);  // Seçilen mekanı bul
        $mekan->yorumlar = [
            ['icerik' => 'Harika bir mekan!', 'isim' => 'Ahmet Yılmaz'],
            ['icerik' => 'Çok memnun kaldık.', 'isim' => 'Fatma Demir'],
            ['icerik' => 'Temizlik ve hizmet mükemmeldi.', 'isim' => 'Mehmet Öz'],
        ];

        $mekan->resimler = is_string($mekan->resimler) ? json_decode($mekan->resimler) : [];

        return view('site.mekanlarsdetails', compact('mekan'));
    }



}
