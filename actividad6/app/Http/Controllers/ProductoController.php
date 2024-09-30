<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Método para mostrar el índice de productos
    public function index()
    {
        return view('productos.indexblade');
    }

    // Método para mostrar la vista de creación de producto
    public function create()
    {
        return view('productos.createblade');
    }

    // Método para mostrar la vista de edición de producto (aunque no se utilizará)
    public function edit($id)
    {
        return view('productos.editblade');
    }
}