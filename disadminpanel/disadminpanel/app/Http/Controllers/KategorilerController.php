<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategorilerController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }

    // Kategoriler listesini gösteren sayfa
    public function index()
    {
        $kategoriler = Kategori::all();
        return view('kategorilerYonetimi.kategoriler.index', compact('kategoriler'));
    }

    // Yeni kategori oluşturma sayfasını gösterir
    public function create()
    {
        $kategoriler = Kategori::all();
        return view('kategorilerYonetimi.kategoriler.create',compact('kategoriler'));
    }

    // Yeni kategori kaydeder
    public function store(Request $request)
    {
        $request->validate([
            'kategori_adi' => 'required|string|max:255',
            'icerikler' => 'required',
            'durum' => 'required|boolean',
            'kapak_resmi' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('kapak_resmi')) {
            $imageName = time().'.'.$request->kapak_resmi->getClientOriginalExtension();
            $request->kapak_resmi->move(public_path('images'), $imageName);
            $input['kapak_resmi'] = 'images/' . $imageName;  // Dosya yolunu direkt kaydediyoruz
        }

        Kategori::create($input);

        return redirect()->route('kategoriler.index')->with('success', 'Kategori başarıyla oluşturuldu.');
    }


    // Belirli bir kategoriyi gösterir
    public function show($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategorilerYonetimi.kategoriler.show', compact('kategori'));
    }

    // Belirli bir kategoriyi düzenleme sayfasını gösterir
    public function edit($id)
    {
        $kategoriler = Kategori::all();
        $kategori = Kategori::findOrFail($id);
        return view('kategorilerYonetimi.kategoriler.edit', compact('kategori','kategoriler'));
    }

    // Belirli bir kategoriyi günceller
     public function update(Request $request, $id)
    {
        $request->validate([
        'kategori_adi' => 'required|string|max:255',
        'icerikler' => 'required',
        'durum' => 'required|boolean',
        'kapak_resmi' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

        $kategori = Kategori::findOrFail($id);
        $input = $request->all();

        if ($request->hasFile('kapak_resmi')) {
        // Eski resim varsa sil
            if ($kategori->kapak_resmi && file_exists(public_path($kategori->kapak_resmi))) {
                unlink(public_path($kategori->kapak_resmi));
            }

            $imageName = time().'.'.$request->kapak_resmi->getClientOriginalExtension();
            $request->kapak_resmi->move(public_path('images'), $imageName);
            $input['kapak_resmi'] = 'images/' . $imageName;  // Dosya yolunu direkt kaydediyoruz
        }

        $kategori->update($input);

        return redirect()->route('kategoriler.index')->with('success', 'Kategori başarıyla güncellendi.');
    }

    // Belirli bir kategoriyi siler
    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->route('kategoriler.index')->with('success', 'Kategori başarıyla silindi.');
    }

    public function destroyAll()
    {
        // Tüm bölge kayıtlarını tek tek sil
        Kategori::query()->delete();

        // Silme işleminden sonra geri yönlendirme yap
        return redirect()->route('kategoriler.index')->with('success', 'Tüm kategoriler başarıyla silindi.');
    }

}
