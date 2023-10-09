<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MRC Panel Hoşgeldiniz!...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/icons/font/bootstrap-icons.css')}}">
    @yield('css')

</head>
<body>
    <header> 
        <div class="containers">
            <div id="logo">MRC Panel</div>
            <div id="user_menu"><a href="{{route("logout")}}">Çıkış</a></div>
        </div>
    </header>
    <div id="content">
        
            <div class="row">
                <div class="col-md-4" id="menu">
                    <ul>
                        <li><a href=""></i>Ana Sayfa</a></li>
                        <li>
                            <strong>Kullanıcılar</strong>
                            <ul>
                                <li><a href="{{route("register-form")}}">Kullanıcı Ekle</a></li>
                                <li><a href="{{route("user_list")}}">Kullanıcı Listesi</a></li>
                            </ul>
                        </li>
                        <li>
                            <strong>İçerikler</strong>
                            <ul>
                                <li><a href="{{Route('icerik-liste')}}">Yazılar</a></li>
                                <li><a href="{{Route('icerik-ekle-form')}}">Yazı Ekle</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{Route("hocalar");}}">Öğretmenler</a>
                        </li>
                        <li>
                            <a href="{{Route("basaranlar");}}">Başaranlar</a>
                        </li>
                        <li>
                            <a href="{{Route("hizmetler");}}">Hizmetlerimiz</a>
                        </li>
                        <li>
                            <a href="{{Route("galeri");}}">Galeri</a>
                        </li>
                        <li>
                            <a href="{{Route("banner");}}">Bannerler</a>
                        </li>
                        <li>
                            <a href="{{route('iletisim');}}">İletişimden Gelenler</a>
                        </li>
                        <li>
                            <a href="{{route('arayalim');}}">Aranması Gerekenler</a>
                        </li>
                        <li>
                            <a href="{{route('arayalim');}}">Şifremi Değiştir</a>
                        </li>
                        <li>
                            <a href="">Diğer Ayarlar</a>
                        </li>



                    </ul>
                </div>
                <div class="col-md-8">

                    @yield('icerik')
                </div>
            </div>
        
    </div>
    
    @yield('js')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#editor').summernote({
                
                tabsize: 2,
                height: 120,
                toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
      </script>
    
</body>
</html>