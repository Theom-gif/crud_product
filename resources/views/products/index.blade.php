<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    <a href="{{ route('products.create') }}">Create Product</a>

    @if(session('success'))
        <div style="color:green">{{ session('success') }}</div>
    @endif

    <ul>
        @foreach($products as $product)
            <li>
                <strong>{{ $product->name }}</strong>
                ({{ $product->category?->name ?? 'No Category' }})
                - Price: {{ $product->price }} - Qty: {{ $product->qty }}
                - <a href="{{ route('products.edit', $product) }}">Edit</a>
                <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
