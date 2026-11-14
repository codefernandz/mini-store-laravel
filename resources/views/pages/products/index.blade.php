<x-layouts.app title="Catálogo">
    <h2 class="section-title">Productos Destacados</h2>

    <div class="catalog-layout">
        <div class="product-grid">
            {{-- Recorrer la coleccion de productos del controlador --}}
            @foreach ($products as $product)
                <x-products.card :product="$product" />
            @endforeach
        </div>

        {{-- Componente reutilizable del sidebar --}}
        <x-cart.sidebar />
    </div>
</x-layouts.app>
