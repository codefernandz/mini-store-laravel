{{-- =====================================================================
     SIDEBAR DEL CARRITO
     Lee la sesión 'cart' (formato [id => cantidad]) y muestra los productos.
     Calcula subtotales y total en tiempo real.
     ===================================================================== --}}

<aside class="cart-sidebar">
    <div class="cart-header">
        <h2>Carrito</h2>
        {{-- Contador de items: cuenta cuántos productos distintos hay --}}
        <span class="cart-count">{{ count(session('cart', [])) }} items</span>
    </div>

    {{-- Si la sesión tiene productos, los mostramos --}}
    @use('App\Models\Product')
    @if (session('cart') && count(session('cart')) > 0)
        @php $total = 0; @endphp

        @foreach (session('cart') as $id => $quantity)
            @php
                // Buscamos el producto en la BD (Eloquent)
                $product = Product::find($id);

                // Si el producto no existe (fue borrado de la BD), lo saltamos
                if (!$product) {
                    continue;
                }

                // Calculamos el subtotal de esta línea
                $subtotal = $product->price * $quantity;

                // Acumulamos al total general
                $total += $subtotal;
            @endphp

            <div class="cart-item">
                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="cart-item-img">
                <div class="cart-item-details">
                    <div class="cart-item-title">{{ $product->name }}</div>
                    <div class="cart-item-price">
                        €{{ number_format($product->price, 2) }} x {{ $quantity }}
                    </div>
                    <div class="cart-item-actions">
                        <span class="cart-item-subtotal">€{{ number_format($subtotal, 2) }}</span>
                        <form action="{{ route('cart.remove', $product) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn-remove">Quitar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- Resumen de totales --}}
        <div class="cart-summary">
            <div class="summary-row">
                <span>Subtotal:</span>
                <span>€{{ number_format($total, 2) }}</span>
            </div>
            <div class="summary-row">
                <span>Envío:</span>
                <span>Gratis</span>
            </div>
            <div class="summary-row total">
                <span>Total:</span>
                <span>€{{ number_format($total, 2) }}</span>
            </div>
        </div>

        <a href="{{ route('cart.index') }}" class="btn btn-primary btn-full-width">
            Ver Carrito Completo
        </a>

        {{-- Si no hay productos, mostramos mensaje de vacío --}}
    @else
        <p class="empty-cart-text">Tu carrito está vacío</p>
    @endif
</aside>
