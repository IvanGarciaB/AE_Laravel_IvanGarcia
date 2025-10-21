<?php

namespace App\Http\Controllers;

use App\Models\Producto_IG;
use Illuminate\Http\Request;

class ProductoController_IG extends Controller
{
    // Muestra lista de productos
    public function index()
    {
        $productos = Producto_IG::all();
        return view('productos_ig.index', compact('productos')); // <- Esto integra datos dinámicos en la vista desde el controlador
    }

    // Muestra detalle de un producto
    public function show($id)
    {
        $producto = Producto_IG::findOrFail($id);
        return view('productos_ig.show', compact('producto'));
    }
}

