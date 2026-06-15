<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Create Category</title>
</head>
<body>
    <h1>Create Category</h1>
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

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name') }}">
        <br>
        <label>Description</label>
        <textarea name="description">{{ old('description') }}</textarea>
        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
