<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pruebas extends Controller
{
    public function hacerPruebas(){
        $data = [
            "usuario" => "marta",
            "email" => "marta@mail.com",
            "hobbies" => ["1", "2"]
    ];
        // var_dump($data);
        // die();

        return view('pruebas', $data);
    }
}
