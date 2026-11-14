<div class="product-card">
    <div class="product-image-container">
        {{-- Imagen del producto | URL Base de datos --}}
        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="product-image">
    </div>
    <div class="product-info">
        <span class="badge">Electrónicos</span>
        <h3>{{ $product->name }}</h3>
        <p>{{ $product->description }}</p>

        <div class="product-bottom">
            <span class="price">${{ number_format($product->price, 2) }}</span>

            <form action="{{ route('cart.add', $product) }}" method="POST">
                @csrf
                <input type="hidden" name="quantity" value="1">
                <button type="submit" class="btn btn-primary btn-sm">+ Agregar</button>
            </form>
        </div>
    </div>
</div>
