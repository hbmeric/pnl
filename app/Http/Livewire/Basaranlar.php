<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\basaranlarModel;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
class Basaranlar extends Component
{
    use WithFileUploads;
  
    public function mount() {}
    public $adi,$okul,$puan,$siralama,$aktif,$veriler,$photo,$edit_id;
    public $edit_mode = false;
    
   
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
        
        if ($this->edit_mode) {
            
            $data = [
                "adi"   => $this->adi,
                "okul" => $this->okul,
                "puan"    => $this->puan,
                "siralama"    => $this->siralama,
                
                
            ];
            if ($this->photo) {
                $photo = $this->fotoKaydet();
                $data['photo'] = $photo;
            }
            basaranlarModel::whereId($this->edit_id)->update($data);
            toastr()->success("Başaran Başarı ile Düzenlendi");
            $this->edit_close();
        }
        else {
            
            $photo = $this->fotoKaydet();
            $data = [
                "adi"   => $this->adi,
                "okul" => $this->okul,
                "puan"    => $this->puan,
                "siralama"    => $this->siralama,
                "aktif"    => 1,
                "photo" => $photo
            ];
        
        basaranlarModel::create($data);
        
        toastr()->success("Başaran Başarı ile eklendi");
        }
        $this->render();

    }
    function open_edit($id) {
        $this->edit_mode = true;
        $this->edit_id = $id;
        $veri = basaranlarModel::whereId($id)->first();
        $this->adi = $veri->adi;
        $this->okul = $veri->okul;
        $this->puan = $veri->puan;
        $this->siralama = $veri->siralama;
        
    }
    function basaran_aktif($id) {
        $veri = basaranlarModel::whereId($id)->first();
        $aktif = ($veri->aktif + 1) % 2;
        basaranlarModel::whereId($id)->update(["aktif" => $aktif]);
        $this->render(); 
    }
    function edit_close() {
        $this->edit_id = 0;
        $this->edit_mode = false;
        $this->adi = "";
        $this->okul ="";
        $this->puan = "";
        $this->siralama = "";
       
    }
    function sil($id) {
        toastr()->success("Başaran Başarı ile silindi");
        basaranlarModel::whereId($id)->delete();
    }
    public function render()
    {
        $this->veriler = basaranlarModel::all();
        return view('livewire.basaranlar');
    }
}
