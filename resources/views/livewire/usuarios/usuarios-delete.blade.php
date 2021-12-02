<div>
    <div class="card text-white bg-dark mx-auto text-center" style="width: 24em;">
    <img style="width:180px;" src="{{Storage::disk('public')->url($usuario->foto!=null ? $usuario->foto : 'images/usuarios/defaultUser.png')}}" class="card-img-top mx-auto mt-4" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$usuario->nombre_usuario}}</h5>
            <p class="card-text">{{$usuario->email}}</p>
            <button wire:click="delete" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Confirmar</button>
            <a href="{{route('usuarios.index')}}" class="btn btn-secondary"><i class="fas fa-undo-alt"></i> Regresar</a>
        </div>
    </div>
</div>
