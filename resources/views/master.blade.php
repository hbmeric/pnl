<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Başak Eğitim Kurumları - Hoşgeldiniz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
    <link rel="stylesheet" href="{{asset('assets/css/icons.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="{{asset("assets/js/bootstrap.js")}}"></script>
    <script src="{{asset("assets/js/slider.js")}}"></script>
    
    @yield('css')
</head>
<body>
    <header>
        <div class="kap">
            <a href="" id="logo"><img src="{{asset("assets/images/logo.png")}}" alt=""></a>
            <a href="tel: +90 599 99 99" id="header-tel"><i class="bi bi-telephone-fill"></i> +90 599 99 99</a>
            <a href="#" id="headernav" class="btn"><i class="bi bi-list"></i></a>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="{{route("anasayfa")}}">Ana Sayfa</a></li>
            <li><a href="{{route("icerik","hakkimizda")}}">Hakkımızda</a></li>
            <li><a href="">Programlarımız</a></li>
            <li><a href="">Eğitmen Kadromuz</a></li>
            <li><a href="{{route("galerion")}}">Galeri</a></li>
            <li><a href="{{route('basaranlaron')}}">Başaranlarımız</a></li>
            <li><a href="{{route('iletisim')}}">İletişim</a></li>
        </ul>
    </nav>
    
    <section>
        <div class="kap">
            @yield("icerik")

        </div>
    </section>
    <footer>
        <div class="kap">
            &copy; 2023 Tüm Hakları Saklıdır. Tasarım ve Programlama: Meriç Web Mutfağı
        </div>
    </footer>
   <script>
        $().ready(function() {
            console.log("acaip")
            $("#headernav").click(function() {
                console.log("tikitoko")
                $("nav").toggleClass("nav-aktif");
            });
        });
   </script>
    
</body>
</html>