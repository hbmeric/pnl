@extends('adminmaster')
@section('icerik')
    <table class="table table-striped">
        <thead->
            <tr>
                <th>Başlık</th>
                <th>Oluşturma Tarihi</th>
                <th>Son Güncelleme Tarihi</th>
                <th>İşlemler</th>
            </tr>
        </thead->
        <tbody>
            @foreach ($datalar as $data)
            <tr>
                <td>{{$data->baslik}}</td>
                <td>{{$data->created_at}}</td>
                <td>{{$data->updated_at}}</td>
                <td>
                    <a href="{{Route("icerik-duzenle-form",$data->id)}}" class="btn btn-info" title="Düzenle"><i class="lni lni-pencil"></i></a>
                    <a href="{{Route("icerik-sil",$data->id)}}" class="btn btn-danger" title="Sil"><i class="lni lni-trash-can"></i></a></td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
@endsection
