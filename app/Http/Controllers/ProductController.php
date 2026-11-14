<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Muestra el catálogo de productos en la página principal.
     *
     * Obtiene todos los productos de la BD y los envía a la vista.
     * Nota: Para catálogos grandes, se usaría paginación (->paginate())
     * para no cargar miles de registros en memoria de golpe.
     */
    public function index()
    {
        $products = Product::all();

        return view('pages.products.index', compact('products'));
    }
}
