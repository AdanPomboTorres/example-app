<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ProductosController extends Controller
{
    public function todosLosProductos(){
        // echo "estoy mostrando todos los productos";
        $productos = Producto::all();
        // print("<pre>".print_r($productos,true)."</pre>");
        return $productos;
    
    }
    public function filtrarFormulario(Request $r){
       $valor = $r->input('opciones'); 
        dd($valor);
        // $filtro = Producto::where('stock', '>', 5);
        // dd($filtro);
    }
    public function insertarProducto(Request $req){
        // echo "estoy mostrando todos los productos";
        // $nombre = "mi producto";
        // $descripcion = "lorem ipsum dolr";
        // $precio = 3.99;
        // $stock = 20;

        $producto = new Producto;

        // $data = ["accion" => "Insertando en la base de datos..."];
        
        $producto->nombre=$req->input('nombre');
        $producto->precio=$req->input('precio');
        $producto->descripcion=$req->input('descripcion');
        $producto->stock=$req->input('stock');
        // dd($req);s
        // return $data;
        // echo "Insertando en la base de datos...";
        // $producto-> nombre = $nombre;
        // $producto-> descripcion = $descripcion;
        // $producto-> precio = $precio;
        // $producto-> stock = $stock;

        $producto->save();
    }

    public function formularioNuevoProducto(){
        return view('nuevoProducto');
    }

    public function mostrarVista(){
        return view('formulario');
    }
    
}
