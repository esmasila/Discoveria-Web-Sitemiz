<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bolge;
class BolgeController extends Controller
{
     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
        $bolgeler = Bolge::all();
        return view('bolgeYonetimi.bolgeler.index', compact('bolgeler'));
    }


    public function create()
    {

        $bolgeler = Bolge::all();
        return view('bolgeYonetimi.bolgeler.create',compact('bolgeler'));
    }


    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'bolge_adi' => 'required|string|max:255',
            'durum' => 'boolean',
            'konum_bilgileri' => 'nullable|string',
            'aciklama' => 'nullable|string',
            'kapak_resmi' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('kapak_resmi')) {
            $fileName = time() . '_' . $request->file('kapak_resmi')->getClientOriginalName();
            $filePath = $request->file('kapak_resmi')->move(public_path('kapaklar'), $fileName);
            $validatedData['kapak_resmi'] = 'kapaklar/' . $fileName;
        }
        $validatedData['parent_id'] = $request->parent_id;
        Bolge::create($validatedData);

        return redirect()->route('bolge.index')->with('success', 'Bölge başarıyla oluşturuldu.');
    }



    public function show($id)
    {
        $bolge = Bolge::findOrFail($id);
        return view('bolgeYonetimi.bolgeler.show', compact('bolge'));
    }


    public function edit($id)
    {
        $bolge = Bolge::findOrFail($id);
        $bolgeler = Bolge::all();
        return view('bolgeYonetimi.bolgeler.edit', compact('bolge', 'bolgeler'));

    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'bolge_adi' => 'required|string|max:255',
            'durum' => 'boolean',
            'konum_bilgileri' => 'nullable|string',
            'aciklama' => 'nullable|string',
            'kapak_resmi' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $bolge = Bolge::findOrFail($id);

        if ($request->hasFile('kapak_resmi')) {
            $fileName = time() . '_' . $request->file('kapak_resmi')->getClientOriginalName();
            $filePath = $request->file('kapak_resmi')->move(public_path('kapaklar'), $fileName);
            $validatedData['kapak_resmi'] = 'kapaklar/' . $fileName;
        }

        $bolge->update($validatedData);

        return redirect()->route('bolge.index')->with('success', 'Bölge başarıyla güncellendi.');
    }



    public function destroy($id)
    {
        $bolge = Bolge::findOrFail($id);
        $bolge->delete();

        return redirect()->route('bolge.index')->with('success', 'Bölge başarıyla silindi.');
    }

    public function destroyAll()
    {
        // Tüm bölge kayıtlarını tek tek sil
        Bolge::query()->delete();

        // Silme işleminden sonra geri yönlendirme yap
        return redirect()->route('bolge.index')->with('success', 'Tüm bölgeler başarıyla silindi.');
    }



}
