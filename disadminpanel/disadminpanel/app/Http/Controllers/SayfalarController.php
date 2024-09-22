<?php

namespace App\Http\Controllers;
use App\Models\Sayfa;
use Illuminate\Http\Request;

class SayfalarController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }

    public function index()
    {

        $sayfalar = Sayfa::all();

        return view('sayfaYonetimi.sayfalar.index', compact('sayfalar'));
    }


    public function create()
    {
        $sayfa = new Sayfa();
        return view('sayfaYonetimi.sayfalar.create', compact('sayfa'));
    }


    public function store(Request $request)
    {

        $sayfa = new Sayfa();
        $sayfa->slug = $request->slug;
        $sayfa->sayfa_adi = $request->sayfa_adi;
        $sayfa->detay_icerigi = $request->detay_icerigi;
        $sayfa->durum = $request->has('durum');

        if($request->hasFile('kapak_resmi')) {

            $file = $request->file('kapak_resmi');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('kapak_resimleri'), $filename);
            $sayfa->kapak_resmi = 'kapak_resimleri/' . $filename;
        }

        $sayfa->save();


        return redirect()->route('sayfalar.index');
    }


    public function show($id)
    {
        $sayfa = Sayfa::findOrFail($id);
        return view('sayfaYonetimi.sayfalar.show', compact('sayfa'));
    }


    public function edit($id)
    {
        $sayfa = Sayfa::findOrFail($id);
        return view('sayfaYonetimi.sayfalar.edit', compact('sayfa'));
    }


    public function update(Request $request, $id)
    {
        $sayfa = Sayfa::findOrFail($id);
        $sayfa->slug = $request->slug;
        $sayfa->sayfa_adi = $request->sayfa_adi;
        $sayfa->detay_icerigi = $request->detay_icerigi;
        $sayfa->durum = $request->has('durum');

        if($request->hasFile('kapak_resmi')) {

            $file = $request->file('kapak_resmi');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('kapak_resimleri'), $filename);
            $sayfa->kapak_resmi = 'kapak_resimleri/' . $filename;
        }

        $sayfa->save();

        return redirect()->route('sayfalar.index')->with('success', 'Sayfa başarıyla güncellendi.');
    }


    public function destroy($id)
    {
        $sayfa = Sayfa::findOrFail($id);
        $sayfa->delete();

        return redirect()->route('sayfalar.index')->with('success', 'Sayfa başarıyla silindi.');
    }


    public function showPublishedMigrations($slug)
    {
        $publishedMigrations = Sayfa::where('slug',$slug)->where('status', 'yayında')->first();
        return view('sayfaYonetimi.sayfalar.index', ['migrations' => $publishedMigrations]);
    }
    public function destroyAll()
    {

        Sayfa::query()->delete();


        return redirect()->route('sayfalar.index')->with('success', 'Tüm sayfalar başarıyla silindi.');
    }
}
