<?php

namespace App\Http\Livewire\Usuarios;

class RulesUsuario{
    public static function ReglasUsuario(){
        return [
            'Usuario.nombre_usuario' => 'required|string',
            'Usuario.email' => "required|string",
            'Usuario.password' => "required|string",
            "foto"=>"nullable|image"
        ]; 
    }
}