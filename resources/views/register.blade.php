<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Register</title>
</head>
<body class="min-h-screen bg-gray-100">
    <div class="ml-10 mt-10">
        <a href="#" class="px-6 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Back</a>
    </div>

    <div class="mt-20 flex items-center justify-center text-center p-6">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="flex flex-col">
                <h1 class="font-bold text-2xl mb-6">Register</h1>

                @if ($errors->any())
                    <div class="text-red-500 mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <label for="email" class="mb-5">Email</label>
                <input name="email" type="email" placeholder="Email" class="text-center p-2 border rounded mb-4" required>

                <label for="username" class="mb-5">Name</label>
                <input name="name" type="text" placeholder="Username" class="text-center p-2 border rounded mb-4" required>

                <label for="password" class="mb-5">Password</label>
                <input name="password" type="password" placeholder="Password" class="text-center p-2 border rounded mb-4" required>

                <button class="block px-6 py-2 mt-5 cursor-pointer bg-blue-500 text-white rounded hover:bg-blue-600">Register</button>
            </div>
        </form>
    </div>
</body>
</html>