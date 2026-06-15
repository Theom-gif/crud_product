<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Categories</title>
</head>
<body>
    <h1>Categories</h1>
    <a href="{{ route('categories.create') }}">Create Category</a>

    @if(session('success'))
        <div style="color:green">{{ session('success') }}</div>
    @endif

    <ul>
        @foreach($categories as $category)
            <li>
                <strong>{{ $category->name }}</strong>
                - <a href="{{ route('categories.edit', $category) }}">Edit</a>
                <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
