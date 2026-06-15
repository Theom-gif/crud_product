<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <a href="{{ route('products.index') }}">Back</a>

    @if($errors->any())
        <div style="color:red">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name', $product->name) }}">
        <br>
        <label>Price</label>
        <input type="text" name="price" value="{{ old('price', $product->price) }}">
        <br>
        <label>Qty</label>
        <input type="number" name="qty" value="{{ old('qty', $product->qty) }}">
        <br>
        <label>Category</label>
        <select name="category_id">
            <option value="">-- Select --</option>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}" {{ old('category_id', $product->category_id) == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
