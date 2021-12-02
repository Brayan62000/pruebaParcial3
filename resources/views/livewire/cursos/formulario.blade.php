<div class="row">



    <div class="col-4">

        @if($foto != null)
        <img style="width:230px" src="{{$foto!=null ? $foto->temporaryUrl() :Storage::disk('public')->url('images/cursos/default.png')}}" alt="">
        @else
        <img style="width:230px" src="{{Storage::disk('public')->url($curso->foto!=null ? $curso->foto : 'images/cursos/default.png') }}" alt="">
        @endif

        <div wire:loading wire:target="foto" class="spinner-border text-light" style="width: 55px; height: 55px;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Subir imagen</label>
            <input wire:model="foto" class="form-control" type="file" id="formFile">
            @error("foto")
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="col-6 mx-auto">
        <div class="mb-3">
            <label>Curso</label>
            <input wire:model.defer="curso.curso" type="text" class="form-control">
            @error("curso.curso")
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label>Categoria</label>
            <input wire:model.defer="curso.categoria" type="text" class="form-control">
            @error("curso.categoria")
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label>Precio</label>
            <input wire:model="curso.precio" type="text" class="form-control">
            @error("curso.precio")
            <span class="text-danger">{{$message}}</span><br>
            @enderror
            <span class="text-warning">{{$curso->precio> 1000 ? "Muy caro": ""}}</span>
        </div>
        <div class="mb-3">
            <label>Subtitulos</label>
            <input wire:model.defer="curso.subtitulos" type="text" class="form-control">
            @error("curso.subtitulos")
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

    </div>
</div>