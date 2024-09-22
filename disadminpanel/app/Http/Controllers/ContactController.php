<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IletisimFormu;
use App\Models\IletisimBilgisi;
use App\Models\IletisimKonusu;
use App\Models\User;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $forms = IletisimFormu::all();
        $contactInfos = IletisimBilgisi::all();

        return view('iletisim.index', compact('forms', 'contactInfos'));
    }

    public function create()
    {
        $contactTopics = IletisimKonusu::all();
        return view('iletisim.create', compact('contactTopics'));
    }

    public function createContactInfo()
    {
        return view('iletisim_bilgileri.create');
    }

    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'ad_soyad' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'konu' => 'required|string|max:255',
            'mesaj' => 'required|string',
            'adres' => 'nullable|string|max:255',
            'telefon1' => 'nullable|string|max:20',
            'telefon2' => 'nullable|string|max:20',
            'email1' => 'nullable|email|max:255',
            'email2' => 'nullable|email|max:255',
            'destek' => 'nullable|string',
        ]);

        // Store form data
        $form = IletisimFormu::create($request->only(['ad_soyad', 'email', 'konu', 'mesaj']));

        // Store contact info if present
        if ($request->filled(['adres', 'telefon1', 'telefon2', 'email1', 'email2', 'destek'])) {
            $info = IletisimBilgisi::create($request->only(['adres', 'telefon1', 'telefon2', 'email1', 'email2', 'destek']));
        }

        return redirect()->route('forms.index')->with('success', 'Kayıt başarıyla oluşturuldu.');
    }

    public function storeContactInfo(Request $request)
    {
        // Validate request
        $request->validate([
            'adres' => 'nullable|string|max:255',
            'telefon1' => 'nullable|string|max:20',
            'telefon2' => 'nullable|string|max:20',
            'email1' => 'nullable|email|max:255',
            'email2' => 'nullable|email|max:255',
            'destek' => 'nullable|string',
        ]);

        // Store contact info
        IletisimBilgisi::create($request->only(['adres', 'telefon1', 'telefon2', 'email1', 'email2', 'destek']));

        return redirect()->route('contactInfo.index')->with('success', 'İletişim bilgisi başarıyla oluşturuldu.');
    }

    public function edit($id)
    {
        $form = IletisimFormu::findOrFail($id);
        $info = IletisimBilgisi::where('id', $id)->first();

        if (!$info) {
            $info = new IletisimBilgisi();
        }

        $contactTopics = IletisimKonusu::all();
        return view('iletisim.edit', compact('form', 'info', 'contactTopics'));
    }

    public function editContactInfo($id)
    {

        $form = IletisimFormu::findOrFail($id);
        $info = IletisimBilgisi::findOrFail($id);
        if (!$info) {
            $info = new IletisimBilgisi();
        }
        return view('iletisim.edit', compact('info','form'));
    }

    public function update(Request $request, $id)
    {
        $form = IletisimFormu::findOrFail($id);

        // Validate request
        $request->validate([
            'ad_soyad' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'konu' => 'required|string|max:255',
            'mesaj' => 'required|string',
            'adres' => 'nullable|string|max:255',
            'telefon1' => 'nullable|string|max:20',
            'telefon2' => 'nullable|string|max:20',
            'email1' => 'nullable|email|max:255',
            'email2' => 'nullable|email|max:255',
            'destek' => 'nullable|string',
        ]);

        $form->update($request->only(['ad_soyad', 'email', 'konu', 'mesaj']));

        $info = IletisimBilgisi::where('id', $id)->first();
        if ($info) {
            $info->update($request->only(['adres', 'telefon1', 'telefon2', 'email1', 'email2', 'destek']));
        }

        return redirect()->route('forms.index')->with('success', 'Kayıt başarıyla güncellendi.');
    }

    public function updateContactInfo(Request $request, $id)
    {
        // Validate request
        $request->validate([
            'adres' => 'nullable|string|max:255',
            'telefon1' => 'nullable|string|max:20',
            'telefon2' => 'nullable|string|max:20',
            'email1' => 'nullable|email|max:255',
            'email2' => 'nullable|email|max:255',
            'destek' => 'nullable|string',
        ]);

        $info = IletisimBilgisi::findOrFail($id);
        $info->update($request->only(['adres', 'telefon1', 'telefon2', 'email1', 'email2', 'destek']));

        return redirect()->route('contactInfo.index')->with('success', 'İletişim bilgisi başarıyla güncellendi.');
    }

    public function show($id)
    {
        $form = IletisimFormu::findOrFail($id);
        $info = IletisimBilgisi::where('id', $id)->first();
        $users = User::all();

        if (!$info) {
            $info = new IletisimBilgisi();
        }

        return view('iletisim.show', compact('form', 'info', 'users'));
    }

    public function showContactInfo($id)
    {
        $info = IletisimBilgisi::findOrFail($id);
        return view('iletisim_bilgileri.show', compact('info'));
    }

    public function destroy($id)
    {
        $form = IletisimFormu::findOrFail($id);
        $form->delete();

        return redirect()->route('forms.index')->with('success', 'İletişim formu başarıyla silindi.');
    }

    public function destroyContactInfo($id)
    {
        $info = IletisimBilgisi::findOrFail($id);
        $info->delete();

        return redirect()->route('contactInfo.index')->with('success', 'İletişim bilgisi başarıyla silindi.');
    }

    public function showContactPage()
    {
        // Get the latest contact info
        $contactInfo = IletisimBilgisi::latest()->first();

        // Pass data to the Blade template
        return view('site.contact', compact('contactInfo'));
    }
}
