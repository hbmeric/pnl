@extends('master');
@section('css')
    <link rel="stylesheet" href="{{asset("assets/css/lightbox.min.css")}}">
@endsection
@section('icerik')
<div id="galeri">
    @foreach ($veriler as $veri)
    <a href="{{asset("uploads/".$veri->photo)}}"  data-lightbox="example-1" class="galeri"><img src="{{asset("uploads/".$veri->photo)}}" alt=""></a>
    @endforeach
    
</div>
<script src="{{asset("assets/js/lightbox-plus-jquery.min.js")}}"></script>
<script src="../src/js/lightbox.js"></script>
@endsection
@section('js')
    
@endsection