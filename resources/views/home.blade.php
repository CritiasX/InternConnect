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
    <div class="block mt-5 ml-5">
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button class="cursor-pointer mt-5 ml-5 px-6 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Logout</button>
        </form>
    </div>
    <div class="text-center mx-auto max-w-md">
        <h1 class="mt-10">Dashboard</h1>
        @auth
        <h2>Hello there, {{Auth::user()->name}}</h2>
        @endauth
    </div>
</body>
</html>