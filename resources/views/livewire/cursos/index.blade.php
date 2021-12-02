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
                <a type="button" class="btn btn-success" href="{{route('cursos.create')}}"><i class="fas fa-plus-circle"></i> Nuevo curso</a>
            </div>
        </div>
    </div>

    @if(count($cursos)>0)


    <table class="table table-dark table-striped text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Imagen</th>
                <th scope="col">Curso</th>
                <th scope="col">Categoria</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cursos as $curso)
            <tr>
                <th scope="row">{{$curso->id}}</th>
                <td><img style="width:34px;" src="{{Storage::disk('public')->url($curso->foto!=null ? $curso->foto : 'images/cursos/default.png')}}"></td>
                <td>{{$curso->curso}}</td>
                <td>{{$curso->categoria}}</td>
                <td>{{"$".$curso->precio}}</td>
                <td>
                    <a href="{{route('cursos.mostrar',$curso)}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                    <a href="{{route('cursos.edit',$curso)}}" class="btn btn-warning btn-sm text-light"><i class="fas fa-pen"></i></a>
                    <a href="{{route('cursos.delete',$curso)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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

    {{ $cargado==true ? $cursos->links() : null}}
</div>