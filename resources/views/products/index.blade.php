<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mini Store</title>
</head>

<body>
  <h1>Mini Store</h1>

  @foreach($products as $product)
  <div>
    <h2>{{ $product->name }}</h2>
    <p>{{ $product->description }}</p>
    <p>{{ number_format($product->price, 2) }}€</p>
    <a href="{{ route('products.show', $product) }}">Ver detalle</a>
  </div>
  @endforeach
</body>

</html>