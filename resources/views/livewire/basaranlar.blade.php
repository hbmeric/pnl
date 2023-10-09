

<div>
    
    <form wire:submit.prevent="ekle" method="POST" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header">
                @if (!$edit_mode)
                    Yeni Başaran Ekle
                
                    
                @else
                    Başaran Düzenle
                @endif 
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="photo">Başaran Resmi</label>
                    <input type="file" wire:model="photo"  @if (!$edit_mode) required @endif  class="form-control">
                    
                </div>
                <div class="form-group">
                    <label for="adi">Adı</label>
                    <input type="text" wire:model="adi" required id="adi" class="form-control">
                    
                </div>
                <div class="form-group">
                    <label for="adi">Kazandığı Okul</label>
                    <input type="text" wire:model="okul" required id="okul" class="form-control">
                    
                </div>
                <div class="form-group">
                    <label for="adi">Puanı</label>
                    <input type="text" wire:model="puan" required id="puan" class="form-control">
                    
                </div>
                <div class="form-group">
                    <label for="adi">Başarı Sıralaması</label>
                    <input type="text" wire:model="siralama" required id="siralama" class="form-control">
                    
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
                <th>Kazandığı Okul</th>
                <th>Kazandığı Puan</th>
                <th>Genel Sıralaması</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($veriler as $veri)
                <tr wire:key="{{ $veri->id }}">
                    <td>{{ $veri->id }}</td>
                    <td><img src="{{ asset("uploads/" . $veri->photo) }}" style="width:100px;" alt="Resim"></td>
                    <td>{{ $veri->adi }}</td>
                    <td>{{ $veri->okul }}</td>
                    <td>{{ $veri->puan }}</td>
                    <td>{{ $veri->siralama }}</td>
                    <td>
                        @if ($veri->aktif)
                            <a wire:click="basaran_aktif({{ $veri->id }})" class="btn btn-success">aktif</a>
                        @else
                        <a wire:click="basaran_aktif({{ $veri->id }})" class="btn btn-warning">Pasif</a>
                        @endif
                        
                        </td>
                    <td><a wire:click="open_edit({{$veri->id}})" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                        <a wire:click="sil({{$veri->id}})" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

