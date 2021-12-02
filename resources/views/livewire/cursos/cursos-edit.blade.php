<div>
    <form wire:submit.prevent="editar" class="table-dark">
        <div class="card text-white bg-dark mb-3">
            <div class="card-header text-center">
                Editar Curso
            </div>
            <div class="card-body">
                @include("livewire.cursos.formulario")
            </div>
            <div class="card-footer text-muted text-center">
                <button wire:loading.attr="disabled" wire:target="foto" wire:click="editar" type="submit" class="btn btn-warning text-light"><i class="fas fa-edit"></i> Editar</button>
                <a href="{{route('cursos.index')}}" class="btn btn-secondary"><i class="fas fa-undo-alt"></i> Regresar</a>
            </div>
        </div>
    </form>
</div>