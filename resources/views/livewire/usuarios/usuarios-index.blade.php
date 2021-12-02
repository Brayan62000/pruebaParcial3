<div wire:init="cargando">
    <div class="row">
        <div class="col-md-10">
            <div class="input-group mb-3">
                <span class="input-group-text bg-dark text-light" id="basic-addon1"><i class="fas fa-search"></i></span>
                <input wire:model="search" type="search" class="form-control bg-dark text-light" placeholder="Buscar" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-2">
            <div class="mb-3">
                <a type="button" class="btn btn-success" href="{{route('usuarios.create')}}"><i class="fas fa-plus-circle"></i> Nuevo usuario</a>
            </div>
        </div>
    </div>

    @if(count($usuarios)>0)


    <table class="table table-dark table-striped text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Foto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <th scope="row">{{$usuario->id}}</th>
                <td><img style="width:34px; height: 34px; border-radius:100%" src="{{Storage::disk('public')->url($usuario->foto!=null ? $usuario->foto : 'images/usuarios/defaultUser.png')}}"></td>
                <td>{{$usuario->nombre_usuario}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->password}}</td>
                <td>
                    <a href="{{route('usuarios.mostrar',$usuario)}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                    <a href="{{route('usuarios.edit',$usuario)}}" class="btn btn-warning btn-sm text-light"><i class="fas fa-pen"></i></a>
                    <a href="{{route('usuarios.delete',$usuario)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @else
    <div style="text-align: center; margin-top:120px">
    <img style="width:80px;" src="{{Storage::disk('public')->url('images/otros/loading.gif')}}" alt="">
    </div>
    @endif

    {{ $cargado==true ? $usuarios->links() : null}}
</div>
