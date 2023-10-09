@extends('adminmaster')
@section('icerik')
    <table class="table datatable">
        <thead>
            <tr>
                <th>Adı</th>
                <th>E-Posta Adresi</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datalar as $data)
                <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td><a href="{{route('kullanici-sil',$data->id)}}" class="btn btn-danger">~Sil~</a></td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
@endsection
@section('css')
<<link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-1.13.5/b-2.4.1/b-html5-2.4.1/b-print-2.4.1/datatables.min.css" rel="stylesheet">
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-1.13.5/b-2.4.1/b-html5-2.4.1/b-print-2.4.1/datatables.min.js"></script>

<script>
    $().ready(function() {
        $('.datatable').DataTable({
            "language"  : {
                "sEmptyTable": "Tabloda veri yok",
                "sInfo": "Toplam _TOTAL_ kayıttan _START_ - _END_ arası gösteriliyor",
                "sInfoEmpty": "Toplam _TOTAL_ kayıt var",
                "sInfoFiltered": "( _MAX_ kayıt arasından filtrelendi)",
                "sInfoPostFix": "",
                "sInfoThousands": ",",
                "sLengthMenu": "_MENU_ kayıt göster",
                "sLoadingRecords": "Yükleniyor...",
                "sProcessing": "İşleniyor...",
                "sSearch": "Ara",
                "sSearchPlaceholder": "Aramak için metin girin",
                "sZeroRecords": "Eşleşen kayıt bulunamadı",
                "oPaginate": {
                    "sFirst": "İlk",
                    "sLast": "Son",
                    "sNext": "Sonraki",
                    "sPrevious": "Önceki"
                },
                "oAria": {
                    "sSortAscending": ": Artan düzene göre sırala",
                    "sSortDescending": ": Azalan düzene göre sırala"
                }
            },
            buttons: [
                'copy', 'excel', 'pdf'
            ]

        });
        
    });
</script>
@endsection