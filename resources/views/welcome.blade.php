<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>InternConnect</title>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="text-center">
        <h1 class="font-bold text-4xl mb-6">InternConnect</h1>
        <ul class="space-y-4">
            <li>
                <a href="{{route('show.login')}}" class="block px-6 py-2 bg-blue-500 text-white rounded hover:bg-orange-600">Login</a>
            </li>
            <li>
                <a href="{{route('show.register')}}" class="block px-6 py-2 bg-blue-500 text-white rounded hover:bg-orange-600">Register</a>
            </li>
        </ul>
    </div>
</body>
</html>