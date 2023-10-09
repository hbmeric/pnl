<div>
    @if (!empty($adi))
        <div class="golge"></div>
        <div class="golge_kap" id="golge_kap">
        <div class="card" id="ic">
            <div class="card-body">
                <form wire:submit.prevent="cevapla">
                    <h4></h4>
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Adı Soyadı</th>
                                <td>{{$adi}}</td>
                            </tr>
                            <tr>
                                <th>E-Posta Adresi</th>
                                <td>{{$email}}</td>
                            </tr>
                            <tr>
                                <th>Telefon</th>
                                <td>{{$tel}}</td>
                            </tr>
                            <tr>
                                <th>IP Adresi</th>
                                <td>{{$ip}}</td>
                            </tr>
                            <tr>
                                <th>Gönderi Tarihi</th>
                                <td>{{$tarih}}</td>
                            </tr>
                            <tr>
                                <th>Konu</th>
                                <td>{{$konu}}</td>
                            </tr>
                            <tr>
                                <th>Mesaj</th>
                                <td>{{$icerik}}</td>
                            </tr>
                            <tr>
                                <th>Cevap</th>
                                <td><textarea wire:model="cvp" cols="30" rows="10">{{$cvp}}</textarea></td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit" class="btn btn-primary">Cevapla</button>
                                </td>
                                <td><a wire:click="iptal" class="btn btn-danger">İptal Et ve Çık</a></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <script>
        $().ready(function() {
            $("#golge_kap").click(function () {
                $(this).remove();
                $(".golge").remove();
                
            });
            $("#ic").click(function(event) {
                // Tıklama olayını engelleyin
                event.stopPropagation();
            });
        });
    </script>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Tarih</th>
                <th>Adı Soyadı</th>
                <th>Telefon</th>
                <th>E-Posta</th>
                <th>IP Adresi</th>
                <th>Konu</th>
                
                <th>Okundu</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($veriler as $veri)
            <tr>
                <td>{{$veri->created_at}}</td>
                <td>{{$veri->adi}}</td>
                <td>{{$veri->tel}}</td>
                <td>{{$veri->email}}</td>
                <td>{{$veri->ip}}</td>
                <td>{{$veri->konu}}</td>
                <td>{{$veri->okundu}}</td>
                <td><a wire:click="oku({{$veri->id}})" class="btn btn-success">Oku</a></td>
                <td></td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
