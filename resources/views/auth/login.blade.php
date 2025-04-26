<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-gradient-to-r from-cyan-500 to-blue-500 w-full max-w-md p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4 text-center">HSD Institute Admin Login</h2>

        @if(session('error'))
            <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf
            <div>
                <label class="block mb-1 font-medium">Email</label>
                <input type="email" name="email" required class="w-full px-3 py-2 border rounded">
            </div>
            <div>
                <label class="block mb-1 font-medium">Password</label>
                <input type="password" name="password" required class="w-full px-3 py-2 border rounded">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-700">
                Login
            </button>
        </form>
    </div>
</body>
</html>
