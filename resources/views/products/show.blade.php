<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <a href="{{ route('products.index') }}" class="back-link">&larr; Volver</a>

        <div class="product-detail">
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <p class="price">{{ number_format($product->price, 2) }} €</p>
            <p class="stock">Srock: {{ $product->stock }}</p>
        </div>
    </div>
</body>

</html>