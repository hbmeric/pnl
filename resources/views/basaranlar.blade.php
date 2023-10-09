@extends('master')
@section('icerik')
    
<h2>Başarılarınız bizim gururumuzdur</h2>
<div id="basaran">
    @foreach ($basaranlar as $kisi)
    <div class="col-md-4">
        <div class="card">
            <div class="card-body basaran-card">
                <img src="{{asset("uploads") . "/" . $kisi->photo}}" class="basari-photo" alt="">
                <div class="basaran-bilgiler">
                    <div class="kim-kazandi">{{$kisi->adi}}</div>
                    <div class="basari-okul"><span>Kanandığı Okul:</span>{{$kisi->okul}}</div>
                    <div class="basari-siralama"><span>Kazandığı Puan</span>{{$kisi->puan}} <br> <span>Genel Sıralaması</span> {{$kisi->siralama}} </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    
    

</div>
@endsection