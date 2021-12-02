<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UsuariosEdit extends Component
{
    use WithFileUploads;
    public Usuario $Usuario;
    public $foto;

    public function render()
    {
        return view('livewire.usuarios.usuarios-edit');
    }

    public function editar(){
        $this->validate();
        if($this->foto!=null){
            if($this->Usuario->foto !=null){
                Storage::disk("public")->delete($this->Usuario->foto);
            }
            $this->Usuario->foto = Storage::disk("public")->put("images/usuarios",$this->foto);
        }
        $this->Usuario->save();
        return redirect(route("usuarios.index"));
    }

    public function rules(){
        return RulesUsuario::ReglasUsuario();
    }
}
