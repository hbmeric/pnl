<?php
use App\Http\Livewire\Hocalar; // Kullanacağınız bileşeni içe aktarın
use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kullanici;
use App\Http\Controllers\Icerik;
use App\Http\Controllers\Onyuz;
use App\Http\Middleware\kullanici_kontrol;
//use App\Http\Livewire\Hocalar;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[Onyuz::class,"anasayfa"])->name("anasayfa");
Route::get('/iletisim',[Onyuz::class,"iletisim"])->name("iletisim");
Route::get('/i/{slug}',[Onyuz::class,"icerik"])->name("icerik");
Route::get('/basaranlar',[Onyuz::class,"basaranlar"])->name("basaranlaron");
Route::get('/galeri',[Onyuz::class,"galeri"])->name("galerion");
Route::get('/register',function () {
    return view("register");
});
Route::get('/login',function () {
    return view("login");
})->name("login");
Route::post("/login-post",[Kullanici::class,"login"])->name("login-post");
Route::prefix( "admin" )->middleware("auth")->group(function () {
    Route::get("/home",function() {
        return view("adminmaster");
    })->name("home");
    Route::get("/register",function () {
        return view("admin.register");
    })->name("register-form");
    Route::post("/register-post",[Kullanici::class,"register"])->name("register-post");
    Route::get("/kullanicilar",[Kullanici::class,"liste"])->name("user_list");
    Route::get("/kullanici-sil/{id}",[Kullanici::class,"sil"])->name("kullanici-sil");
    Route::prefix("icerik")->group(function() {
       Route::get("/ekle",function() {
            return view("admin.icerik_ekle");
       })->name("icerik-ekle-form"); 
       Route::post("ekle-form",[Icerik::class,"ekle"])->name("icerik-ekle-post");
       Route::get("liste",[Icerik::class,"liste"])->name("icerik-liste");
       Route::get("duzenle/{id}",[Icerik::class,"duzenle_form"])-> name("icerik-duzenle-form");
       Route::post("duzenle-post/{id}",[Icerik::class,"duzenle"])->name("icerik-duzenle");
       Route::get("sil/{id}",[Icerik::class,"sil"])->name("icerik-sil");
       
    });
    Route::get("/hocalar",function() {
        return view("admin.hocalar");
    })->name("hocalar");
    Route::get("/basaranlar",function() {
        return view("admin.basaranlar");
    })->name("basaranlar");
    Route::get("/hizmetler",function() {
        return view("admin.hizmetler");
    })->name("hizmetler");
    Route::get("/galeri",function() {
        return view("admin.galeri");
    })->name("galeri");
    Route::get("/banner",function() {
        return view("admin.banner");
    })->name("banner");
    Route::get("/iletisim",function() {
        return view("admin.iletisim");
    })->name("iletisim");
    Route::get("/arayalim",function() {
        return view("admin.arayalim");
    })->name("arayalim");
});
Route::get('/logout',[Kullanici::class,"logout"])->name("logout");