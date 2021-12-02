<?php

namespace App\Http\Livewire\Cursos;

use App\Models\curso;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class CursosDelete extends Component
{
    public curso $curso;
    public function render()
    {
        return view('livewire.cursos.cursos-delete');
    }

    public function delete(){
        $this->curso->delete();
        Storage::disk("public")->delete($this->curso->foto);
        return redirect(route("cursos.index"));
    }
}
