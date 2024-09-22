<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mekan;
use App\Models\Bolge;
use App\Models\Kategori;

class MekanController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }

    // Tüm mekanları listeleme
    public function index()
    {
        $mekanlar = Mekan::all();
        return view('mekanYonetimi.mekanlar.index', compact('mekanlar'));
    }

    // Yeni mekan oluşturma formunu gösterme
    public function create()
    {
        $bolgeler = Bolge::all(); // Bölge verilerini almak için
        $kategoriler = Kategori::all(); // Kategori verilerini almak için
        return view('mekanYonetimi.mekanlar.create', compact('bolgeler', 'kategoriler'));
    }

    // Yeni mekan kaydetme
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'bolge_id' => 'required|exists:bolgeler,id',
            'kategori_id' => 'required|exists:kategoriler,id',
            'mekan_adi' => 'required|string|max:255',
            'acilis_saati' => 'nullable',
            'kapanis_saati' => 'nullable',
            'aciklama' => 'nullable|string',
            'kapak_resmi' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'resimler' => 'nullable',
            'yas_siniri' => 'nullable|integer',
            'ucret' => 'nullable|numeric',
        ]);

        if ($request->hasFile('kapak_resmi')) {
            $fileName = time() . '_' . $request->file('kapak_resmi')->getClientOriginalName();
            $filePath = $request->file('kapak_resmi')->move(public_path('kapaklar'), $fileName);
            $validatedData['kapak_resmi'] = 'kapaklar/' . $fileName;
        }

        Mekan::create($validatedData);

        return redirect()->route('mekanlar.index')->with('success', 'Mekan başarıyla oluşturuldu.');
    }

    // Mevcut bir mekanın detaylarını gösterme
    public function show($id)
    {
        $mekan = Mekan::findOrFail($id);
        return view('mekanYonetimi.mekanlar.show', compact('mekan'));
    }

    // Mevcut bir mekanı düzenleme formunu gösterme
    public function edit($id)
    {

        $mekan = Mekan::findOrFail($id);
        $bolgeler = Bolge::all(); // Bölge verilerini almak için
        $kategoriler = Kategori::all(); // Kategori verilerini almak için

        return view('mekanYonetimi.mekanlar.edit', compact('mekan', 'bolgeler', 'kategoriler'));
    }

    // Mevcut bir mekanı güncelleme
    public function update(Request $request, $id)
    {
        $mekan = Mekan::findOrFail($id);

        $validatedData = $request->validate([
            'bolge_id' => 'required|exists:bolgeler,id',
            'kategori_id' => 'required|exists:kategoriler,id',
            'mekan_adi' => 'required|string|max:255',
            'acilis_saati' => 'nullable',
            'kapanis_saati' => 'nullable',
            'aciklama' => 'nullable|string',
            'kapak_resmi' => 'nullable',
            'resimler' => 'nullable',
            'yas_siniri' => 'nullable|integer',
            'ucret' => 'nullable|numeric',
        ]);

        if ($request->hasFile('kapak_resmi')) {
            $fileName = time() . '_' . $request->file('kapak_resmi')->getClientOriginalName();
            $filePath = $request->file('kapak_resmi')->move(public_path('kapaklar'), $fileName);
            $validatedData['kapak_resmi'] = 'kapaklar/' . $fileName;
        }

        $mekan->update($validatedData);

        return redirect()->route('mekanlar.index')->with('success', 'Mekan başarıyla güncellendi.');
    }

    // Mevcut bir mekanı silme
    public function destroy($id)
    {
        $mekan = Mekan::findOrFail($id);
        $mekan->delete();

        return redirect()->route('mekanlar.index')->with('success', 'Mekan başarıyla silindi.');
    }

    // Tüm mekanları silme
    public function destroyAll()
    {
        // Tüm mekanları sil
        Mekan::query()->delete();

        // Silme işleminden sonra geri yönlendirme yap
        return redirect()->route('mekanlar.index')->with('success', 'Tüm mekanlar başarıyla silindi.');
    }
}
