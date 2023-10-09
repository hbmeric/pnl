@extends('adminmaster')
@section('icerik')
    <form action="{{route('register-post')}}" method="POST">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="card-header">Yeni Kullanıcı Kaydı</div>
                <div class="form-group"><label for="name">Admin Adı</label><input required type="text" name="name" id="name" class="form-control" placeholder="Adı"></div>
                <div class="form-group"><label for="email">E-Posta Adresi</label><input required type="email" name="email" id="email" class="form-control" placeholder="E-Posta Adresi"></div>
                <div class="form-group"><label for="password">Şifre</label><input required type="text" name="password" id="password" class="form-control" placeholder="Şifre"></div>
                <div class="form-group"><label for="">&nbsp;</label><input type="submit" class="form-control btn btn-primary"></div>
            </div>
        </div>
    </form>
@endsection