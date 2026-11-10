<x-layouts.app title="Catálogo">
    <h2 class="section-title">Productos Destacados</h2>

    <div class="catalog-layout">
        <div class="product-grid">
            {{-- Recorrer la colección de productos del controlador --}}
            @foreach ($products as $product)
                <x-products.card :product="$product" />
            @endforeach
        </div>

        {{-- Sidebar provisional --}}
        <div class="cart-sidebar">
            <p class="empty-cart-text">El carrito estará disponible pronto</p>
        </div>
    </div>
</x-layouts.app>
