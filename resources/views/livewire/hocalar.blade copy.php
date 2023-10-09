@extends('adminmaster')
@section('icerik')


<div>
    <form action="" wire:submit.prevent="ekle" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header">Yeni Eğitimci Ekle</div>
            <div class="card-body">
                <div class="form-group"><label for="foto">Öğretmen Resmi</label><input type="file" wire:model="photo" required name="photo" id="foto"  class="form-control"></div>
                @error('photo') <span class="text-red-500">{{ $message }}</span> @enderror
                <div class="form-group"><label for="adi">Adı</label><input type="text" wire:model="adi" required name="adi" id="adi" class="form-control"></div>
                @error('adi') <span class="text-red-500">{{ $message }}</span> @enderror
                <div class="form-group"><label for="brans">Branşı</label><input type="text" wire:model="brans"  requiredname="brans" id="brans" class="form-control"></div>
                @error('brans') <span class="text-red-500">{{ $message }}</span> @enderror
                <div class="form-group"><label for="ozgecmiş">Özgeçmişi</label><textarea name="cv" wire:model="cv" required id="ozgecmis" cols="30" rows="10" class="form-control editor"></textarea></div>
                <div class="form-group"><button type="submit" class="form-control btn btn-primary">Ekle</button></div>
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
            <tr>
                @foreach ($veriler as $veri)
                    <td>{{$veri->id}}</td>
                    <td></td>
                    <td>{{$veri->adi}}</td>
                    <td>{{$veri->brans}}</td>
                    <td></td>  
                @endforeach
                
            </tr>
        </tbody>
    </table>
</div>

@endsection
