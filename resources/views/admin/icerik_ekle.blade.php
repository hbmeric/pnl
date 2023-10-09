@extends('adminmaster')
@section('icerik')
    <form action="{{Route("icerik-ekle-post")}}" method="POST">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="form-group"><label for="">Başlık</label><input type="text" name="baslik" id="baslik" placeholder="İçerik Başlığı" class="form-control"></div>
                <div class="form-group"><label for="">İçerik</label><textarea name="icerik" id="editor" cols="30" rows="10" ></textarea></div>
                <div class="form-group"><button type="submit" class="btn btn-primary form-control">Ekle</button></div>
            </div>
        </div>
    </form>
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $().ready(function () {
            $("#editor").summernote();
        });
    </script>
@endsection
