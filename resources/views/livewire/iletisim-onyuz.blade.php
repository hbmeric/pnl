<div>
    <div class="row">
        <div class="col-md-6">
            <span class="iletisim-baslik">Adres</span> Pazar Mah. Uluborlu Düğün Salonu Altı<br>
            <span class="iletisim-baslik">Telefon</span> <a href="tel:+905555555">0 555 555 55 55</a><br>
            <span class="iletisim-baslik">E-Posta Adresi</span> <a href="mail:info@basakegitim.com">info@basakegitim.com</a><br>
            <span class="iletisim-baslik">Vergi Numarası</span> 123546351<br>
            <span class="iletisim-baslik">Banka Hesaplarımız</span>
            <div id="bankalar">
                <div class="banka">
                    <h6>Ziraat Bankası</h6>
                    <strong>Başak Eğitim Kurumları</strong>
                    <p>TR 85 500 0000 0000 0000 0000</p>
                </div>
                <div class="banka">
                    <h6>İş Bankası</h6>
                    <strong>Başak Eğitim Kurumları</strong>
                    <p>TR 85 500 0000 0000 0000 0000</p>
                </div>
                <div class="banka">
                    <h6>Halk Bankası</h6>
                    <strong>Başak Eğitim Kurumları</strong>
                    <p>TR 85 500 0000 0000 0000 0000</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3140.550657787864!2d30.448265475433868!3d38.08084449447107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c5eb535de781f1%3A0x21f487c03733074d!2zQmHFn2FrIEXEn2l0aW0gS3VydW1sYXLEsQ!5e0!3m2!1str!2str!4v1694074203795!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="row">
        @if ($gonderildi == 1)
            <div class="alert alert-success">İletiniz Başarı ile tarafımıza ulaştı. En kısa sürede iletiniz hakkında tarafınıza geri dönüş yapılacaktır.</div>
        @endif
        <div class="col-md-12">
            <form wire:submit.prevent="ekle">
                <div class="form-group"><label for="adi">Adınız Soyadınız</label><input type="text" required  name="adi" id="adi" wire:model="adi" class="form-control"></div>
                <div class="form-group"><label for="email">E-Posta Adresiniz</label><input type="text" required  name="email" id="email" wire:model="email" class="form-control"></div>
                <div class="form-group"><label for="tel">Telefon Numaranız</label><input type="text" required  name="tel" id="tel" wire:model="tel" class="form-control"></div>
                <div class="form-group"><label for="konu">Mesaj Konusu</label><input type="text" required  name="konu" id="konu" wire:model="konu" class="form-control"></div>
                <div class="form-group"><label for="icerik">Mesajınız</label><textarea name="icerik" required  id="icerik" wire:model="icerik" cols="30" rows="10" class="form-control"></textarea></div>
                <br>
                <div class="form-group"><input type="submit" class="form-control btn btn-primary" value="Gönder"></div>
            </form>
            <div class="ara-not">* Bütün Alanların Doldurulması zorunludur.</div>
            <div class="ara-not">** Mesajınızda yer alan içerikten mesajı yazan kişi sorumludur. Kişisel hakların ihlali, küfür ve rencide edici sözler, devlet aleyhine suç teşkil eden sözler içermesi durumunda dava açma hakkımızı saklı tutmaktayız.</div>
        </div>
    </div>
    
</div>