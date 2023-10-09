@extends('master')
@section('icerik')
    

<div id="banner">
    <div id="banner-container" class="slide">
            @foreach ($bannerler as $banner)
                <div class="slide-inner"><img src="{{asset("uploads/") ."/" . $banner->image}}" alt=""></div>
            @endforeach
           
            <div class="slide-inner"><img src="{{asset("assets/images/000.jpg")}}" alt=""></div>
        
        
    
    </div>
</div>
<h2> <span class="text-yellow"><i class="bi bi-stars"></i><i class="bi bi-stars"></i><i class="bi bi-stars"></i></span> BAŞARANLARIMIZ <span class="text-yellow"><i class="bi bi-stars"></i><i class="bi bi-stars"></i><i class="bi bi-stars"></i></span></h2>

<div class="row basaran-row">
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
<div id="slogan">
    Eğitimdir ki, bir milleti ya özgür, bağımsız, şanlı, yüksek bir topluluk halinde yaşatır ya da esaret ve sefalete terk eder. <br><span>M. Kemal ATATÜRK</span>
</div>

<div class="row">
    <div id="ogretmenler" class="col-md-6">
        <div class="row">
            <h2>Eğitmen Kadromuz</h2>
            @foreach ($ogretmenler as $item)
            <div class="col-md-6">
                
                <div class="card  ogretmen-card">
                    <div class="card-body">
                        <img src="{{asset("uploads/" . $item->photo)}}" alt="" class="ogretmen-photo rounded">
                        <div class="ogretmen-name">{{$item->adi}}</div>
                        <div class="ogretmen-brans">{{$item->brans}}</div>
                        <a href="" class="ogretmen-detay">Detaylar >></a>
                    </div>
                </div>
            </div>
            @endforeach
            
            
        </div><br><br>
        <div class="row form-group">
            <a href="#" id="tum_ogretmen" class="btn btn-warning form-control">Tüm eğitmenlerimizi görmek için buraya tıklayabilirsiniz.</a>
        </div>
    </div>
    
    <div class="col-md-6">
        @livewireStyles
        
        @livewire('arayalim-onyuz')
        @livewireScripts
    </div>
</div>
<h2>Hizmetlerimiz</h2>
<div class="row">
    <div id="carousel-hizmet" class="carousel slide" data-ride="carousel" >
        <div class="carousel-inner">
            @foreach ($hizmetler as $hizmet)
            @if ($loop->iteration == 1)
            <div class="carousel-item active"><div class="row">
            @else 
                @if ($loop->iteration % 2 == 1)
                    </div></div>
                    <div class="carousel-item"><div class="row">
                @endif
                
            
            @endif
           
                
                    <div class="col-md-6">
                        <div class="card hizmet-card">
                            <div class="card-body">
                                <img src="{{asset("uploads/".$hizmet->photo)}}" alt="" class="hizmet-photo rounded">
                                <div class="hizmet-ozet">
                                    <h5>{{$hizmet->baslik}}</h5>
                                    {{$hizmet->ozet}}
                                </div>
                                <a href="" class="hizmet-link">Detaylar >></a>
                            </div>
                        </div>
                    </div>
                @if ($loop->iteration % 2 == 0 || $loop->last == $loop->iteration)
                    </div></div>
                    
                @endif
                
            @endforeach
            
           
        </div>
        
    </div>
</div>

<script>

    $().ready(function () {
        $("#banner-container").slidermrc();
        //$("#carousel-hizmet").carousel();
       
    })
</script>



@endsection