<div>
    <form wire:submit.prevent="ekle" method="POST" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header">
                
                    Yeni Banner Ekle
               
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="photo">Resim</label>
                    <input type="file" wire:model="photos" multiple required  class="form-control">
                    
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Ekle</button>
                    
                </div>
            </div>
        </div>
    </form>
    <ul id="galeri" wire:sortable="sirala">
        @foreach ($veriler as $veri)
        <li wire:sortable.item="{{$veri->id}}" wire:key="ban-{{$veri->id}}">
            <img src="{{asset("uploads/".$veri->image)}}" alt="">
            <a wire:click="sil({{$veri->id}})" class="sil"><i class="bi bi-x-circle"></i></a>
        </li>
        @endforeach
        
    </ul>


</div>
