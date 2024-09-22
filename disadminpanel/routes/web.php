<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\BolgeController;
use App\Http\Controllers\MekanYonetimiController;
use App\Http\Controllers\SayfalarController;
use App\Http\Controllers\KategorilerController;
use App\Http\Controllers\MekanController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;

// Route::get('/', [SiteController::class,'index'])->name('home');
// Route::get('/bolge/{bolgeid}', [SiteController::class,'bolgeDetay'])->name('bolgeDetay');



Route::get('/', [SiteController::class, 'index'])->name('anasayfa');
// Route::get('/bolgeler/{bolgeID}', [SiteController::class, 'bolgeDetay'])->name('bolge.detay');
Route::get('/destination', [SiteController::class, 'destination'])->name('destination');
// Route::get('/destination/{mekanID}', [SiteController::class, 'destinationDetail'])->name('detail');
Route::get('/hakkimizda', [SiteController::class, 'hakkimizda'])->name('hakkimizda');
Route::get('/blog', [SiteController::class, 'blogIndex'])->name('site.blog');
Route::get('/blog/{id}', [SiteController::class, 'blogDetail'])->name('blog.detay');
Route::get('/destination-details', [SiteController::class, 'destinationDetails'])->name('details');
Route::get('/bolgeler/{bolgeID}', [SiteController::class, 'showAltBolgeler'])->name('bolge.detay');

Route::get('/contacts', [SiteController::class, 'contact'])->name('site.contact');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contact.show');
Route::get('/contact', [ContactController::class, 'showContactPage'])->name('contact.page');

// Route::get('/mekankismi', [SiteController::class, 'mekancik'])->name('site.mekan');
// Route::get('/mekankismidetay', [SiteController::class, 'mekancikdetay'])->name('site.mekandetay');

// Route::get('/mekankismi/{bolgeID}', [SiteController::class, 'showmekancik'])->name('mekanin.detay');

Route::get('/admin',[HomeController::class,'ev'])->name('ev');

Route::get('/sablon', function () {
    return view('site.sablon');
});

// Mekanlar
Route::get('/bolgeler/{bolgeID}/mekanlar', [SiteController::class, 'mekanlarByBolge'])->name('bolge.mekanlar');

Route::get('/kategoriler/{kategoriID}/mekanlar', [SiteController::class, 'mekanlarByKategori'])->name('kategori.mekanlar');

// Mekan Detay
Route::get('/mekanlarr/{mekanID}/detay', [SiteController::class, 'mekanDetay'])->name('site.mekandetay');


Route::get('/sayfa', [SiteController::class, 'sayfamm'])->name('sayfa');


// Route::get('/sayfa/{id}', [SiteController::class, 'sayfam'])->name('sayfa.show');




//admin
// routes/web.php
// Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
// Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
// Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
// Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
// Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
// Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
// Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
//admin

//pages
// Route::get('/pages', [PageController::class, 'index'])->name('pages.index');
// Route::get('/pages/create', [PageController::class, 'create'])->name('pages.create');
// Route::get('/pages/{id}', [PageController::class, 'show'])->name('pages.show');
// Route::get('/{slug}', [PageController::class, 'show'])->name('pages.show');
// Route::resource('pages', PageController::class);
// Route::get('/pages/{id}/edit', [PageController::class, 'edit'])->name('pages.edit');
// Route::put('/pages/{id}', [PageController::class, 'update'])->name('pages.update');
// Pages Routes



// Kategori ile ilgili route'lar
// Route::get('/kategori', [MekanYonetimiController::class, 'kategoriIndex']);
// Route::get('/kategori/create', [MekanYonetimiController::class, 'kategoriCreate']);

// Mekan Bilgileri ile ilgili route'lar
// Route::get('/mekan-bilgileri', [MekanYonetimiController::class, 'mekanBilgileriIndex']);
// Route::get('/mekan-bilgileri/create', [MekanYonetimiController::class, 'mekanBilgileriCreate']);

//sayfalar

Route::prefix('admin')->group(function () {
    Route::delete('/sayfalar/destroy-all', [SayfalarController::class, 'destroyAll'])->name('sayfalar.destroyAll');
    Route::get('sayfalar', [SayfalarController::class, 'index'])->name('sayfalar.index');
    Route::get('sayfalar/create', [SayfalarController::class, 'create'])->name('sayfalar.create');
    Route::post('sayfalar', [SayfalarController::class, 'store'])->name('sayfalar.store');
    Route::get('sayfalar/{id}', [SayfalarController::class, 'show'])->name('sayfalar.show');
    Route::get('sayfalar/{id}/edit', [SayfalarController::class, 'edit'])->name('sayfalar.edit');
    Route::put('sayfalar/{id}', [SayfalarController::class, 'update'])->name('sayfalar.update');
    Route::delete('/sayfalar/{id}', [SayfalarController::class, 'destroy'])->name('sayfalar.destroy');
    Route::get('sayfalar/{slug}', [SayfalarController::class, 'showPublishedMigrations'])->name('sayfalar.published');
    //sayfalar



    // Kategorilerin listelenmesi
    Route::delete('/kategoriler/destroy-all', [KategorilerController::class, 'destroyAll'])->name('kategoriler.destroyAll');
    Route::get('/kategoriler', [KategorilerController::class, 'index'])->name('kategoriler.index');
    Route::get('/kategoriler/create', [KategorilerController::class, 'create'])->name('kategoriler.create');
    Route::post('/kategoriler', [KategorilerController::class, 'store'])->name('kategoriler.store');
    Route::get('/kategoriler/{id}', [KategorilerController::class, 'show'])->name('kategoriler.show');
    Route::get('/kategoriler/{id}/edit', [KategorilerController::class, 'edit'])->name('kategoriler.edit');
    Route::put('/kategoriler/{id}', [KategorilerController::class, 'update'])->name('kategoriler.update');
    Route::delete('/kategoriler/{id}', [KategorilerController::class, 'destroy'])->name('kategoriler.destroy');
    // Kategorilerin listelenmesi




    // bolgeler
    Route::delete('/bolge/destroy-all', [BolgeController::class, 'destroyAll'])->name('bolge.destroyAll');
    Route::get('/bolge', [BolgeController::class, 'index'])->name('bolge.index');
    Route::get('/bolge/create', [BolgeController::class, 'create'])->name('bolge.create');
    Route::post('/bolge', [BolgeController::class, 'store'])->name('bolge.store');
    Route::get('/bolge/{id}', [BolgeController::class, 'show'])->name('bolge.show');
    Route::get('/bolge/{id}/edit', [BolgeController::class, 'edit'])->name('bolge.edit');
    Route::put('/bolge/{id}', [BolgeController::class, 'update'])->name('bolge.update');
    Route::delete('/bolge/{id}', [BolgeController::class, 'destroy'])->name('bolge.destroy');
    //bolgeler



    //mekanlar
    Route::delete('/mekanlar/destroy-all', [MekanController::class, 'destroyAll'])->name('mekanlar.destroyAll');
    Route::get('/mekanlar', [MekanController::class, 'index'])->name('mekanlar.index');
    Route::get('/mekanlar/create', [MekanController::class, 'create'])->name('mekanlar.create');
    Route::post('/mekanlar', [MekanController::class, 'store'])->name('mekanlar.store');
    Route::get('/mekanlar/{id}', [MekanController::class, 'show'])->name('mekanlar.show');
    Route::get('/mekanlar/{id}/edit', [MekanController::class, 'edit'])->name('mekanlar.edit');
    Route::put('/mekanlar/{id}', [MekanController::class, 'update'])->name('mekanlar.update');
    Route::delete('/mekanlar/{id}', [MekanController::class, 'destroy'])->name('mekanlar.destroy');
    //mekanlar



    //iletisim
   //iletisim
// İletişim Formları
Route::get('/iletisim', [ContactController::class, 'index'])->name('forms.index');
Route::get('/iletisim/create', [ContactController::class, 'create'])->name('forms.create');
Route::post('/iletisim', [ContactController::class, 'store'])->name('forms.store');
Route::get('/iletisim/{id}/edit', [ContactController::class, 'edit'])->name('forms.edit');
Route::put('/iletisim/{id}', [ContactController::class, 'update'])->name('forms.update');
Route::delete('/iletisim/{id}', [ContactController::class, 'destroy'])->name('forms.destroy');
Route::get('/iletisim/{id}', [ContactController::class, 'show'])->name('forms.show'); // En son

// İletişim Bilgileri
Route::get('/iletisim-bilgileri', [ContactController::class, 'index'])->name('contactInfo.index');

Route::get('/iletisim-bilgileri/create', [ContactController::class, 'createContactInfo'])->name('contactInfo.create');
Route::post('/iletisim-bilgileri', [ContactController::class, 'storeContactInfo'])->name('contactInfo.store');
Route::get('/iletisim-bilgileri/{id}/edit', [ContactController::class, 'editContactInfo'])->name('contactInfo.edit');
Route::put('/iletisim-bilgileri/{id}', [ContactController::class, 'updateContactInfo'])->name('contactInfo.update');
Route::delete('/iletisim-bilgileri/{id}', [ContactController::class, 'destroyContactInfo'])->name('contactInfo.destroy');
Route::get('/iletisim-bilgileri/{id}', [ContactController::class, 'showContactInfo'])->name('contactInfo.show'); // En son

    //iletisim

    //log in
    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    //log in
    //logout
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
    //logout
    //user kısmı

    Route::get('/users', [UserController::class, 'index'])->name('users.index'); //
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    //user kısmı




    // Roller

    Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
    Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
    Route::get('/roles/{id}', [RoleController::class, 'show'])->name('roles.show');
    Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    Route::put('/roles/{id}', [RoleController::class, 'update'])->name('roles.update');
    Route::delete('/roles/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');

    // roller

    //blog
    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');
    Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');
    //blog
});

