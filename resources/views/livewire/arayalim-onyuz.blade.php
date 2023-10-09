<div id="arayalim" class="arayalim-kap">
    @if ($gonderildi != 0) 
        <div class="alert-success">Telefon Numaranız başarı ile kaydedildi. En kısa süre içerisinde size geri dönüş yapılacaktır</div>
    @endif
    <h4>Siz isteyin, Biz sizi Arayalım</h4>
    <form wire:submit.prevent="ekle">
        <div class="form-group"><input type="text" id="adi" wire:model="adi" placeholder="Adınız Soyadınız" class="form-control"></div>
        <div class="form-group"><input type="text" id="tel" wire:model="tel" placeholder="Telefonunuz" class="form-control"></div>
        <div class="form-group">
            <div id="my-captcha"></div>
              
        </div>

        <div class="form-group"><button type="submit" class="form-control btn btn-primary">Beni Arayın</button></div>
        <div class="ara-not">
            ** Kişisel verileri koruma kanunu kapsamında burada paylaştığınız veriler kurumumuz tarafından herhangi bir 3. şahısla kesinlikle paylaşılmayacaktır. 3. şahıslar adına reklamasyon yapılmayacak ve tarafımızca da kesinlikle reklamasyon amaçlı spam SMS tarafımızca almayacaksınız.
        </div>
    </form>
    
</div>
