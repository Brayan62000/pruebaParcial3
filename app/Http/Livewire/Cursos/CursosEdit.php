<?php

namespace App\Http\Livewire\Cursos;

use App\Models\curso;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CursosEdit extends Component
{
    use WithFileUploads;
    public curso $curso;
    public $foto;
    public function render()
    {
        return view('livewire.cursos.cursos-edit');
    }

    public function editar(){
        $this->validate();
        if($this->foto!=null){
            if($this->curso->foto !=null){
                Storage::disk("public")->delete($this->curso->foto);
            }
            $this->curso->foto = Storage::disk("public")->put("images/cursos",$this->foto);
        }
        $this->curso->save();
        return redirect(route("cursos.index"));
    }

    public function rules(){
        return RulesCurso::Reglas();
    }
}
