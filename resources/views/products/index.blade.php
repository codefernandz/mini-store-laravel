<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min Store</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <header>
            <h1>Mini Store</h1>
        </header>

        <div class="product-grid">
            @foreach ($products as $product)
            <div class="product-card">
                <h2>{{ $product->name }}</h2>
                <p class="description">{{ $product->description }}</p>
                <p class="price">{{ number_format($product->price, 2) }} €</p>
                <a href="{{ route('products.show', $product) }}" class="btn btn-primary">Ver detalle</a>
            </div>
            @endforeach
        </div>
    </div>


</body>

</html>