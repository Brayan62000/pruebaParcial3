<?php

namespace App\Http\Livewire\Usuarios;

use App\Http\Livewire\Usuarios\RulesUsuario;
use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UsuariosCreate extends Component
{
    use WithFileUploads;
    public Usuario $Usuario;
    public $foto;

    public function mount(){
        $this->Usuario = new Usuario();
    }

    public function render()
    {
        return view('livewire.usuarios.usuarios-create');
    }

    public function crear(){
        $this->validate();
        if($this->foto!=null){
            $this->Usuario->foto = Storage::disk("public")->put("images/usuarios",$this->foto);
        }
        $this->Usuario->save();
        return redirect(route("usuarios.index"));
    }

    public function rules(){
        return RulesUsuario::ReglasUsuario();
    }
}
