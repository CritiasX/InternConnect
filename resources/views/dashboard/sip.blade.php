<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIP Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="h-screen bg-gray-500 m-0 p-0">

    <div class="flex h-full">

        <!-- Sidebar -->
        <aside class="w-[17%] bg-gray-100 drop-shadow-2xl flex flex-col justify-between">

            <div>
                <!-- Logo -->
                <div class="bg-amber-100 m-5 py-6 text-center text-lg font-bold text-gray-800 rounded">
                    InternConnect Logo
                </div>

                <!-- Main Menu -->
                <p class="text-2xl ml-6 mb-2 uppercase text-gray-600 font-bold">Main Menu</p>
                <nav class="flex flex-col gap-2 px-4">
                    <a href="#" class="flex items-center space-x-4 p-2 rounded-md hover:bg-gray-300 text-gray-600 text-xl font-medium">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 3h12v2H4V3zm0 4h12v2H4V7zm0 4h12v2H4v-2zm0 4h8v2H4v-2z" />
                        </svg>
                        <span>Student</span>
                    </a>
                    <a href="#" class="flex items-center space-x-4 p-2 rounded-md hover:bg-gray-300 text-gray-600 text-xl font-medium">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 3h12v2H4V3zm0 4h12v2H4V7zm0 4h12v2H4v-2zm0 4h8v2H4v-2z" />
                        </svg>
                        <span>HTE</span>
                    </a>
                    <a href="#" class="flex items-center space-x-4 p-2 rounded-md hover:bg-gray-300 text-gray-600 text-xl font-medium">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 3h12v2H4V3zm0 4h12v2H4V7zm0 4h12v2H4v-2zm0 4h8v2H4v-2z" />
                        </svg>
                        <span>Placement</span>
                    </a>
                    <a href="#" class="flex items-center space-x-4 p-2 rounded-md hover:bg-gray-300 text-gray-600 text-xl font-medium">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 3h12v2H4V3zm0 4h12v2H4V7zm0 4h12v2H4v-2zm0 4h8v2H4v-2z" />
                        </svg>
                        <span>Reports</span>
                    </a>
                </nav>

                <!-- User Info -->
                <div class="px-4 mt-6">
                    <div class="flex items-center space-x-4 p-2 rounded-md text-gray-700 bg-white shadow">
                        <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 3h12v2H4V3zm0 4h12v2H4V7zm0 4h12v2H4v-2zm0 4h8v2H4v-2z" />
                        </svg>
                        <div class="text-sm">
                            <p class="font-semibold text-gray-900">{{ Auth::user()->name }}</p>
                            <p class="truncate text-gray-500 max-w-[140px]">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Links -->
            <div class="px-4 mb-4">
                <hr class="border-t border-gray-400 my-4">
                <nav class="flex flex-col gap-2">
                    <a href="#" class="flex items-center space-x-4 p-2 rounded-md hover:bg-gray-300 text-gray-600 text-xl font-medium">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 3h12v2H4V3zm0 4h12v2H4V7zm0 4h12v2H4v-2zm0 4h8v2H4v-2z" />
                        </svg>
                        <span>Settings</span>
                    </a>
                        <form action="logout" method="POST">
                            @csrf
                            <button class="cursor-pointer flex items-center w-full space-x-4 p-2 rounded-md hover:bg-gray-300 text-gray-600 text-xl font-medium">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M4 3h12v2H4V3zm0 4h12v2H4V7zm0 4h12v2H4v-2zm0 4h8v2H4v-2z" />
                                </svg>
                                <span>Logout</span>
                            </button>
                        </form>
                </nav>
            </div>

        </aside>

        <!-- Main Content -->
        <main class="flex-1 overflow-auto bg-white p-6 drop">
            <div class="w-full h-full rounded-lg shadow-2xl">

            </div>
        </main>

    </div>

</body>
</html>
