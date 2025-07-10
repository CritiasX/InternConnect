<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="text-center mx-auto max-w-md">
        <h1 class="mt-10">Dashboard</h1>
        @auth
        <h2>Hello there, {{Auth::user()->name}}</h2>
        @endauth
    </div>
</body>
</html>