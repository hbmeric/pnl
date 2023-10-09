<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use App\Models\bannerModel;
use Illuminate\Support\Facades\File;

class Banner extends Component
{
    use WithFileUploads;
    public $photos = [];
    public $veriler = [];
    public $rules = ["photos.*" => "required|image"];
    public function fotoKaydet($photo)
    {
        // Yüklenen dosyayı kontrol edin
        if ($photo) {
            // Yeni bir benzersiz dosya adı oluşturun
            $dosyaAdi = time() . '.webp' ;
            
            // Webp formatına dönüştürme işlemi
            $webpImage = Image::make($photo->getRealPath())
                ->encode('webp', 75) // Webp formatını kullanarak yüzde 75 kalitede sıkıştırma yapar
                ->save(public_path('uploads\\' . $dosyaAdi));
    
            // Başarılı bir şekilde kaydedildiğinde geri bildirim gönderme kodu
            return $dosyaAdi;
        } else {
            return false;
        }
    }
    function ekle() {
        $this->validate();
        $sayi = 0;
        foreach ($this->photos as $photo) {
            $dosya = $this->fotoKaydet($photo);
            bannerModel::create(['image' => $dosya]);
        }
    }
    function sil($id) {
        $veri = bannerModel::whereId($id)->first();
        $photo = public_path("uploads\\" . $veri->image);
        if (File::exists($photo)) {
            File::delete($photo);
            bannerModel::whereId($id)->delete();
            toastr()->success("Banner Başarı ile silindi...","Başarılı!");
        }
        else {
            toastr()->alert("oops! bir yanlışlık var sanırsam...");
        }

    }
    function sirala($list) {
        foreach ($list as $item) {
            bannerModel::whereId($item['value'])->update(["sira" => $item['order']]);
        }

    }
    public function render()
    {
        $this->veriler = bannerModel::orderBy("sira")->get();
        return view('livewire.banner');
    }
}
