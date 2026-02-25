<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;

class ProductController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('productos.index', compact('categorias'));
    }

    public function show()
    {
        $productos = Producto::all();
        return view('productos.show', compact('productos')); 
    }

    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->categoria_id = $request->categoria_id;
        
        $producto->save();

        return redirect()->route('productos.show');
    }
}