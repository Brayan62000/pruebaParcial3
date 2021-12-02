<?php

namespace App\Http\Livewire\Cursos;

use App\Models\curso;
use Livewire\Component;

class CursosMostrar extends Component
{
    public curso $curso;
    public function render()
    {
        return view('livewire.cursos.cursos-mostrar');
    }
}
