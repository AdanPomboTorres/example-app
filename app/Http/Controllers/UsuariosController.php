<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function findUserById($id)
    {
        $usuarios = [
            [
                "nombre" => "Pepe",
                "email" => "pepe@gmail.com",
                "tipo" => "normal",
                "hobbies" => ["futbol", "baloncesto"]
            ],
            [
                "nombre" => "Juan",
                "email" => "juan@gmail.com",
                "tipo" => "normal",
                "hobbies" => ["comer", "beber"]
            ],
            [
                "nombre" => "Alfonso",
                "email" => "alfonso@gmail.com",
                "tipo" => "vip",
                "hobbies" => ["dormir", "cine", "leer"]
            ]
        ];

        // var_dump($usuarios);
        $datosVista = $usuarios[$id - 1];
        return view('user', $datosVista);
        // echo "El usuario tiene el id: $id";
    }
}
