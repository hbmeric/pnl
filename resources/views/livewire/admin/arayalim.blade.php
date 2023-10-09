<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Kayıt Tarihi</th>
                <th>Adı Soyadı</th>
                <th>Telefon Numarası</th>
                <th>Alınan Notlar</th>
                <th>Arandı mı?</th>
                <th>Tekrar Aransın mı?</th>
                <th>Tekrar Arama İstenen Tarih</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($veriler as $veri)
                <tr>
                    <td>{{$veri->created_at}}</td>
                    <td>{{$veri->adi}}</td>
                    <td>{{$veri->tel}}</td>
                    <td>{{$veri->notlar}}</td>
                    <td>
                        @if ($veri->arandimi == "Evet")
                            <span class="yesil-isik">{{$veri->arandimi}}</span>
                            
                        @else   
                            <a wire:click="arayiver({{$veri->id}})" class="kirmizi-isik">{{$veri->arandimi}}</a>
                        @endif
                        
                    
                    </td>
                    <td>
                        @if ($veri->tekrar == "Evet")
                            
                        <a wire:click="tekrar({{$veri->id}})" class="yesil-isik">{{$veri->tekrar}}</a>
                        @else   
                            <a wire:click="tekrar({{$veri->id}})">{{$veri->tekrar}}</a>
                        @endif
                    </td>
                    <td>{{$veri->tekrar_tarih}}</td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
