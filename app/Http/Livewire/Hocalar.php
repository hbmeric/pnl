<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ogretmenler;
//use Livewire\Attributes\Rule; 
//use App\Models\Post;
use Intervention\Image\Facades\Image;


class Hocalar extends Component
{
    use WithFileUploads;
  
    public function mount() {}
    public $adi,$brans,$cv,$veriler,$photo,$edit_id;
    public $edit_mode = false;
    
    public $rules = [
        "adi"   => "required",
        "brans" => "required",
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
                "adi"   => $this->adi,
                "brans" => $this->brans,
                "cv"    => $this->cv,
            ];
            if ($this->photo) {
                $photo = $this->fotoKaydet();
                $data['photo'] = $photo;
            }
            ogretmenler::whereId($this->edit_id)->update($data);
            toastr()->success("Öğretmen Başarı ile Düzenlendi");
            $this->edit_close();
        }
        else {
            
            $photo = $this->fotoKaydet();
            $data = [
                "adi"   => $this->adi,
                "brans" => $this->brans,
                "cv"    => $this->cv,
                "photo" => $photo
            ];
        
        ogretmenler::create($data);
        
        toastr()->success("Öğretmen Başarı ile eklendi");
        }
        $this->render();

    }
    function open_edit($id) {
        $this->edit_mode = true;
        $this->edit_id = $id;
        $veri = ogretmenler::whereId($id)->first();
        $this->adi = $veri->adi;
        $this->cv = $veri->cv;
        $this->brans = $veri->brans;
        
    }
    function edit_close() {
        $this->edit_id = 0;
        $this->edit_mode = false;
        $this->adi = "";
        $this->brans = "";
        $this->cv = "";
       
    }
    function sil($id) {
        toastr()->success("Öğretmen Başarı ile silindi");
        ogretmenler::whereId($id)->delete();
    }
    public function render()
    {
        $this->veriler = ogretmenler::all();
        return view('livewire.hocalar');
    }
}
