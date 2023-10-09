<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MRC Panel Giriş</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <div id="container">
        <form action="{{route("login-post")}}" method="POST">
            @csrf
            <div class="card">
                <div class="card-title">Giriş Yap</div>
                <div class="card-body">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="bg-warning">{{ $error }}</div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <div class="input-group"><label for="" class="input-group-text">E-Posta Adresi </label><input type="email" name="email" class="form-control" required placeholder="Kullanıcı Adı"></div>
                    </div>
                    <div class="form-group">
                        <div class="input-group"><label for="" class="input-group-text">Parola </label><input type="password" name="password" required class="form-control" placeholder="Şifre"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"><button type="submit" class="btn btn-primary form-control">Giriş</button></div>
                        </div>
                        <div class="col-md-6"><div class="form-group"><a href="#" class="btn btn-warning form-control">Şifremi Unuttum</a></div></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>