@extends('adminmaster')
@section('icerik')
    @if ($error)
        <div class="alert alert-danger">Eski Şifre Hatalı</div>
    @endif
    <form action="" method="POST">
        @csrf
        <div class="form-group"><label for="">Eski Şifre</label><input type="password" name="eski_sifre" id="eski_sifre" required  class="form-control"></div>
        <div class="form-group"><label for="">Yeni Şifre</label><input type="password" name="yeni_sifre" id="yeni_sifre" required class="form-control"></div>
        <div class="form-group"><label for="">Yeni Şifre Tekrar</label><input type="password" name="yeni_sifre_tekrar" required id="yeni_sifre_tekrar" class="form-control"></div>
        <div class="form-group"><button type="submit" class="btn btn-primary">Değiştir</button></div>
        @if ($errors->has('new_password_again'))
        <span class="alert alert-danger">Şifreler eşleşmiyor.</span>
    @endif
    </form>
@endsection