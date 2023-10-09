<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bannerModel;
use App\Models\basaranlarModel;
use App\Models\hizmetlerModel;
use App\Models\icerikModel;
use App\Models\galeriModel;
use App\Models\ogretmenler;

class Onyuz extends Controller
{
   function anasayfa() {
        $bannerler = bannerModel::orderBy("sira")->get();
        $basaranlar = basaranlarModel::orderBy("id","desc")->limit(3)->get();
        $hizmetler = hizmetlerModel::orderBy("id")->get();
        $ogretmenler = ogretmenler::orderBy("id")->limit(2)->get();
        return view("anasayfa",["bannerler" => $bannerler,"basaranlar"=>$basaranlar,"hizmetler"=>$hizmetler,"ogretmenler" => $ogretmenler]);
   }
   function iletisim() {
      return view("iletisim");
   }
   function icerik($slug) {
      $icerik = icerikModel::whereSlug($slug)->first();
      $data = [
         'baslik' => $icerik->baslik,
         'icerik' => $icerik->icerik
      ];
      return view("icerik",$data);

   }
   function basaranlar() {
      $basaranlar = basaranlarModel::whereAktif(1)->orderBy("id","desc")->get();
      return view("basaranlar",compact("basaranlar"));
   }
   function galeri() {
      $veriler = galeriModel::orderBy("siralama","asc")->get();
      return view("galeri",compact("veriler"));
   }
}
