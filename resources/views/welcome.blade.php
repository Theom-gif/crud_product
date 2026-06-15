<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome</h1>
    <p>
        <a href="{{ route('products.index') }}" style="display:inline-block;padding:8px 12px;background:#2d6cdf;color:#fff;text-decoration:none;border-radius:4px;margin-right:8px">Products</a>
        <a href="{{ route('categories.index') }}" style="display:inline-block;padding:8px 12px;background:#20a8a0;color:#fff;text-decoration:none;border-radius:4px">Categories</a>
    </p>
</body>
</html>