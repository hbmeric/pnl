<?php

namespace App\Http\Controllers;
use App\Models\icerikModel;
use Illuminate\Http\Request;
use Str;

class Icerik extends Controller
{
    function liste() {
        $datalar = icerikModel::get();
        return view("admin.icerik_liste",compact("datalar"));
    }
    function ekle(Request $request) {
        $data = [];
        $data['baslik'] = $request->baslik;
        $data['slug'] = Str::slug($request->baslik);
        $data['icerik'] = $request->icerik;
        $sonuc = icerikModel::create($data);
        if ($sonuc) {
            toastr()->success("İçerik Eklendi","Başarılı!");
            return redirect()->back();
        }
    }
    function duzenle(Request $request,$id) {
        $data = [];
        $data['baslik'] = $request->baslik;
        $data['slug'] = Str::slug($request->baslik);
        $data['icerik'] = $request->icerik;
        $sonuc = icerikModel::whereId($id)->update($data);
        if ($sonuc) {
            toastr()->success("İçerik Düzenlendi","Başarılı!");
            return redirect()->back();
        }
    }
    function duzenle_form($id) {
        $veriler = icerikModel::whereId($id)->first();
        return view("admin.icerik_duzenle",compact("veriler"));
    }
    function sil($id) {
        $sonuc = icerikModel::whereId($id)->delete();
        if ($sonuc) {
            toastr()->success("İçerik Silindi","Başarılı!");
            return redirect()->back();
        }
    }
}
