<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Perfil extends Component
{
    public $id;
    public $usuario;
    public $nombre;
    public $correo;
    public $dia_nac;
    public $mes_nac;
    public $ano_nac;
    public $telefono;
    public $trabajo;
    public $ciudad;
    public $contrasena;

    public function render()
    {
        $infoPerfil = Auth::user();
        $this->nombre = $infoPerfil->name;
        $this->correo = $infoPerfil->email;
        $this->dia_nac = $infoPerfil->day_birth;
        $this->mes_nac = $infoPerfil->month_birth;
        $this->ano_nac = $infoPerfil->year_birth;
        $this->telefono = $infoPerfil->number;
        $this->trabajo = $infoPerfil->job;
        $this->ciudad = $infoPerfil->city;
        $this->contrasena = $infoPerfil->password;
        return view('livewire.perfil');
    }

    public function mount()
    {
        $this->id = Auth::user()->id;
    }

    public function actualizar()
    {
        $this->validateInputs();
        $this->usuario = User::where('id', $this->id)->first();
        $this->usuario->update([
            'name' => $this->nombre,
            'day_birth' => $this->dia_nac,
            'month_birth' => $this->mes_nac,
            'year_birth' => $this->ano_nac,
            'number' => $this->telefono,
            'job' => $this->trabajo,
            'city' => $this->ciudad,
            'password' => $this->contrasena,
        ]);
        return redirect()->back();
    }

    public function validateInputs()
    {
        $this->validate([
            'nombre' => 'required',
            'dia_nac' => 'required',
            'mes_nac' => 'required',
            'ano_nac' => 'required',
            // 'telefono' => 'required|numeric|digits:10',
            'telefono' => 'numeric|digits:10',
            // 'trabajo' => 'required',
            // 'ciudad' => 'required',
        ], [
            'nombre.required' => 'El campo Nombre es obligatorio.',
            'dia_nac.required' => 'El campo Día de nacimiento es obligatorio.',
            'mes_nac.required' => 'El campo Mes de nacimiento es obligatorio.',
            'ano_nac.required' => 'El campo Año de nacimiento es obligatorio.',
            // 'telefono.required' => 'El campo Teléfono es obligatorio.',
            'telefono.numeric' => 'El campo Teléfono debe ser numérico.',
            'telefono.digits' => 'El campo Teléfono debe tener 10 dígitos.',
            // 'trabajo.required' => 'El campo Trabajo es obligatorio.',
            // 'ciudad.required' => 'El campo Ciudad es obligatorio.',
        ]);
    }
}
