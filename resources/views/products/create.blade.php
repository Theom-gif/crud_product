<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Create Product</title>
</head>
<body>
    <h1>Create Product</h1>
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

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name') }}">
        <br>
        <label>Price</label>
        <input type="text" name="price" value="{{ old('price') }}">
        <br>
        <label>Qty</label>
        <input type="number" name="qty" value="{{ old('qty') }}">
        <br>
        <label>Category</label>
        <select name="category_id">
            <option value="">-- Select --</option>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
