<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Create Category</title>
</head>
<body>
    <style>
        body { font-family: Arial, Helvetica, sans-serif; background: #f5f7fa; padding: 20px; }
        .form-card { max-width: 700px; margin: 28px auto; background: #fff; padding: 20px 24px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); }
        .form-card h1 { margin: 0 0 8px; font-size: 1.4rem; }
        .form-row { margin-bottom: 12px; }
        label { display: block; font-weight: 600; margin-bottom: 6px; }
        input[type="text"], input[type="number"], select, textarea { width: 100%; padding: 8px 10px; border: 1px solid #e2e8f0; border-radius: 6px; box-sizing: border-box; }
        button { background: #2563eb; color: #fff; padding: 8px 14px; border-radius: 6px; border: none; cursor: pointer; }
        a.button-link { color: #2563eb; text-decoration: none; margin-bottom: 12px; display: inline-block; }
        .error { color: #b91c1c; background: #fff1f2; padding: 8px; border-radius: 4px; margin-bottom: 12px; }
    </style>

    <div class="form-card">
        <h1>Create Category</h1>
        <a class="button-link" href="{{ route('categories.index') }}">← Back</a>

        @if($errors->any())
            <div class="error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form-row">
                <label>Name</label>
                <input type="text" name="name" value="{{ old('name') }}">
            </div>

            <div class="form-row">
                <label>Description</label>
                <textarea name="description">{{ old('description') }}</textarea>
            </div>

            <button type="submit">Save</button>
        </form>
    </div>
</body>
</html>
