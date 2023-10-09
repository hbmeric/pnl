

<div>
    
    <form wire:submit.prevent="ekle" method="POST" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header">
                @if (!$edit_mode)
                        Yeni Öğretmen Ekle
                    
                        
                    @else
                        Öğretmen Düzenle
                    @endif 
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="photo">Öğretmen Resmi</label>
                    <input type="file" wire:model="photo" required class="form-control">
                    
                </div>
                <div class="form-group">
                    <label for="adi">Adı</label>
                    <input type="text" wire:model="adi" required id="adi" class="form-control">
                    
                </div>
                <div class="form-group">
                    <label for="brans">Branşı</label>
                    <input type="text" wire:model="brans" required id="brans" class="form-control">
                    
                </div>
                <div class="form-group">
                    <label for="cv">Özgeçmişi</label>
                    <textarea wire:model="cv" required id="cv" cols="30" rows="10" class="form-control editor"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">@if (!$edit_mode)
                        Ekle
                    
                        
                    @else
                        Düzenle
                    @endif </button>
                    @if ($edit_mode)
                        <a wire:click="edit_close" class="btn btn-warning">İptal</a>
                    
                        
                    
                    @endif 
                </div>
            </div>
        </div>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Resim</th>
                <th>Adı Soyadı</th>
                <th>Branşı</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($veriler as $veri)
                <tr wire:key="{{ $veri->id }}">
                    <td>{{ $veri->id }}</td>
                    <td><img src="{{ asset("uploads/" . $veri->photo) }}" style="width:100px;" alt="Resim"></td>
                    <td>{{ $veri->adi }}</td>
                    <td>{{ $veri->brans }}</td>
                    <td><a wire:click="open_edit({{$veri->id}})" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                        <a wire:click="sil({{$veri->id}})" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


