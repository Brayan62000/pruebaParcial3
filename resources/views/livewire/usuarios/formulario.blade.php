<div class="row">
    <div class="col-4">
        @if($foto != null)
        <img  style="width:230px;margin-left:15%;" src="{{$foto!=null ? $foto->temporaryUrl() :Storage::disk('public')->url('images/usuarios/defaultUser.png')}}" alt="">
        @else
        <img style="width:230px;margin-left:15%;" src="{{Storage::disk('public')->url($Usuario->foto!=null ? $Usuario->foto : 'images/usuarios/defaultUser.png') }}" alt="">
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
            <label>Nombre del usuario</label>
            <input wire:model.defer="Usuario.nombre_usuario" type="text" class="form-control">
            @error("Usuario.nombre_usuario")
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label>E-mail</label>
            <input wire:model.defer="Usuario.email" type="email" class="form-control">
            @error("Usuario.email")
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label>Contraseña</label>
            <input wire:model.defer="Usuario.password" type="password" class="form-control">
            @error("Usuario.password")
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
</div>