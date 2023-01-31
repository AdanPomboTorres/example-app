<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function todosLosProductos(){
        // echo "estoy mostrando todos los productos";
        $productos = Producto::all();
        print("<pre>".print_r($productos,true)."</pre>");
    }
}
