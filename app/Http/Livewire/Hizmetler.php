<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use App\Models\hizmetlerModel;
class Hizmetler extends Component
{
    use WithFileUploads;
  
    public function mount() {}
    public $baslik,$ozet,$icerik,$veriler,$photo,$edit_id;
    public $edit_mode = false;
    
    public $rules = [
        "baslik"   => "required",
        "ozet" => "required",
        "icerik" =>"required",
        "photo" => "image",
    ];
    public function fotoKaydet()
    {
        // Yüklenen dosyayı kontrol edin
        if ($this->photo) {
            // Yeni bir benzersiz dosya adı oluşturun
            $dosyaAdi = time() . '.webp' ;
            
            // Webp formatına dönüştürme işlemi
            $webpImage = Image::make($this->photo->getRealPath())
                ->encode('webp', 75) // Webp formatını kullanarak yüzde 75 kalitede sıkıştırma yapar
                ->save(public_path('uploads\\' . $dosyaAdi));
    
            // Başarılı bir şekilde kaydedildiğinde geri bildirim gönderme kodu
            return $dosyaAdi;
        } else {
            return false;
        }
    }

    public function ekle() {
        $this->validate();
        if ($this->edit_mode) {
            
            $data = [
                "baslik"   => $this->baslik,
                "ozet" => $this->ozet,
                "icerik"    => $this->icerik,
            ];
            if ($this->photo) {
                $photo = $this->fotoKaydet();
                $data['photo'] = $photo;
            }
            hizmetlerModel::whereId($this->edit_id)->update($data);
            toastr()->success("Hizmet Başarı ile Düzenlendi");
            $this->edit_close();
        }
        else {
            
            $photo = $this->fotoKaydet();
            $data = [
                "baslik"   => $this->baslik,
                "ozet" => $this->ozet,
                "icerik"    => $this->icerik,
                "photo" => $photo
            ];
        
        hizmetlerModel::create($data);
        
        toastr()->success("Hizmet Başarı ile eklendi");
        }
        $this->render();

    }
    function open_edit($id) {
        $this->edit_mode = true;
        $this->edit_id = $id;
        $veri = hizmetlerModel::whereId($id)->first();
        $this->baslik = $veri->baslik;
        $this->ozet = $veri->ozet;
        $this->icerik = $veri->icerik;
        
    }
    function edit_close() {
        $this->edit_id = 0;
        $this->edit_mode = false;
        $this->baslik = "";
        $this->ozet = "";
        $this->icerik = "";
       
    }
    function sil($id) {
        toastr()->success("Hizmet Başarı ile silindi");
        hizmetlerModel::whereId($id)->delete();
    }
    public function render()
    {
        $this->veriler = hizmetlerModel::all();
        return view('livewire.hizmetler');
    }
}
