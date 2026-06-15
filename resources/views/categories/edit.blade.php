<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edit Category</title>
</head>
<body>
    <h1>Edit Category</h1>
    <a href="{{ route('categories.index') }}">Back</a>

    @if($errors->any())
        <div style="color:red">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name', $category->name) }}">
        <br>
        <label>Description</label>
        <textarea name="description">{{ old('description', $category->description) }}</textarea>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
