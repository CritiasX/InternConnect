<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Login</title>
</head>
<body class="min-h-screen bg-gray-100">

    <div class="ml-10 mt-10">
        <a href="{{route('show.landing')}}" class="px-6 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Back</a>
    </div>

    <div class="mt-20 flex items-center justify-center text-center p-6">
        <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="flex flex-col">
            <h1 class="font-bold text-2xl mb-6">Login</h1>
            <input name="name" type="text" placeholder="Username" class="text-center p-2 border rounded mb-4" required>
            <input name="password" type="password" placeholder="Password" class="text-center p-2 border rounded" required>
            <input type="submit" name="" id="" class="block px-6 py-2 mt-5 cursor-pointer bg-blue-500 text-white rounded hover:bg-orange-600" value="Login">
            </div>
        </form>
    </div>

    @if ($errors->any())
        <ul class="px-4 py-2 bg-red-100">
            @foreach ($errors->all() as $error)
            <li class="my-2 text-red-500">{{$error}}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>