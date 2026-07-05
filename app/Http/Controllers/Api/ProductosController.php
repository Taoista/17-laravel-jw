<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    
    public function get_productos()
    {
        $productos = [
            ['id' => 1, 'nombre' => 'Producto 1', 'precio' => 10.99],
            ['id' => 2, 'nombre' => 'Producto 2', 'precio' => 19.99],
            ['id' => 3, 'nombre' => 'Producto 3', 'precio' => 5.99],
        ];

        return response()->json(['message' => 'success', 'data' => $productos]);
    }

}
