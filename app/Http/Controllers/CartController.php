<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Añade un producto al carrito (o suma cantidad si ya existe).
     * Usamos sesiones en lugar de BD porque el carrito de un invitado es efímero.
     */
    public function add(Request $request, Product $product)
    {
        // Obtenemos el carrito actual. Formato: [idProducto => cantidad].
        // Si no existe, devolvemos un array vacío para evitar errores de null.
        $cart = Session::get('cart', []);

        // Validación básica: la cantidad mínima es 1.
        $quantity = (int) $request->input('quantity', 1);
        if ($quantity < 1) {
            $quantity = 1;
        }

        // Si el producto ya está en el carrito, sumamos; si no, lo añadimos.
        if (isset($cart[$product->id])) {
            $cart[$product->id] += $quantity;
        } else {
            $cart[$product->id] = $quantity;
        }

        // Guardamos el estado actualizado en la sesión.
        Session::put('cart', $cart);

        // Volvemos a la página anterior con un mensaje flash (dura 1 petición).
        return redirect()->back()->with('success', 'Producto añadido al carrito');
    }

    /**
     * Elimina un producto completamente del carrito.
     */
    public function remove(Product $product)
    {
        $cart = Session::get('cart', []);

        if (isset($cart[$product->id])) {
            unset($cart[$product->id]);
            Session::put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Producto eliminado');
    }

    /**
     * Muestra la página del carrito completo con el desglose.
     */
    public function index()
    {
        $cart = Session::get('cart', []);
        $products = [];
        $total = 0;

        // Iteramos el carrito para obtener datos completos de BD y calcular totales.
        foreach ($cart as $productId => $quantity) {
            $product = Product::find($productId);

            if ($product) {
                $subtotal = $product->price * $quantity;
                $products[] = [
                    'product' => $product,
                    'quantity' => $quantity,
                    'subtotal' => $subtotal,
                ];
                $total += $subtotal;
            }
        }

        return view('pages.cart.index', compact('products', 'total'));
    }
}
