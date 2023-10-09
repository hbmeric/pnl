<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\iletisimModel;
use Illuminate\Support\Facades\Mail;

class Iletisim extends Component
{
    public $idm,$adi,$email,$tel,$konu,$icerik,$okundu,$cvp,$ip,$tarih;
    public function oku($id) {
        $v = iletisimModel::whereId($id)->first();
        $this->idm = $v->id;
        $this->adi = $v->adi;
        $this->email = $v->email;
        $this->tel = $v->tel;
        $this->konu = $v->konu;
        $this->icerik = $v->icerik;
        $this->okundu = $v->okundu;
        $this->cvp = $v->cvp;
        $this->ip = $v->ip;
        $this->tarih = $v->created_at;
        iletisimModel::whereId($id)->update(['okundu' => "Okundu"]);

    }
    function iptal() {
        $this->idm = "";
        $this->adi = "";
        $this->email = "";
        $this->tel = "";
        $this->konu = "";
        $this->icerik = "";
        $this->okundu = "";
        $this->cvp = "";
        $this->ip = "";
    }
    function cevapla() {
        $id = $this->id;
        $cvp = $this->cvp;
        $mesaj = $this->cvp . '<br><br><br>Metniniz: ' . $this->icerik;
        $subject = 'Başaran Eğitim Kurumları\'na gönerdiğiniz ' . $this->konu . ' konulu gönderinizin cevap metni.';
        $data = [
            "cvp" => $cvp
        ];
        iletisimModel::whereId($id)->update($data);
        // $this->sendEmail($this->email,$subject,$mesaj);
        toastr()->success("Cevap başarı ile gönderildi");
        $this->iptal();
    }
    public function sendEmail($email,$konu,$mesaj)
    {
        // Mesaj nesnesi oluşturun
        $message = Mail::send('email.blade.php', [], function ($message) {
            // Konuyu ayarlayın
            $message->subject($konu);

            // Gövdeyi ayarlayın
            $message->viewData([
                'mesaj' => $mesaj
            ]);

            // Gönderici bilgilerini ayarlayın
            $message->from('info@basakegitim.com', 'Başak Eğitim Kurumları');

            // Alıcı bilgilerini ayarlayın
            $message->to($email);
        });

        // Mesajın gönderilip gönderilmediğini kontrol edin
        if ($message) {
            return true;
        } else {
            return false;
        }
    }
    public function render()
    {
        $veriler = iletisimModel::orderBy("created_at","desc")->get();
        return view('livewire.admin.iletisim',compact("veriler"));
    }
}
