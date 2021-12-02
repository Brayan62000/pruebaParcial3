<div>
    <div>
        <div class="card text-white bg-dark mx-auto text-center" style="width: 24em;">
            <img style="width:180px;" src="{{Storage::disk('public')->url($curso->foto!=null ? $curso->foto : 'images/cursos/default.png')}}" class="card-img-top mx-auto mt-4" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$curso->curso}}</h5>
                <p class="card-text">{{$curso->categoria}}</p>
                <p class="card-text">Precio: {{$curso->precio}}</p>
                <a href="{{route('cursos.index')}}" class="btn btn-secondary d-block"><i class="fas fa-undo-alt"></i> Regresar</a>
            </div>
        </div>
    </div>
</div>