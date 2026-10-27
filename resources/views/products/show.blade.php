<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $product->name }}</title>
</head>

<body>
  <a href="{{ route('products.index') }}">&larr; Volver</a>

  <h1>{{ $product->name }}</h1>
  <p>{{ $product->description }}</p>
  <p>{{ number_format($product->price, 2) }}€</p>
  <p>Stock: {{ $product->stock }}</p>

</body>

</html>