<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center mt-5">
        <h1>Welcome to My Blog</h1>
        <p>This is a simple blog project to understand Laravel HMVC structure and repository pattern.</p>
        <a href="{{ route('blog.index') }}" class="btn btn-primary">Go to Blog</a>
    </div>
</body>
</html>
