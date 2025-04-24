<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen">
    <div class="flex flex-col md:flex-row min-h-screen">
        <!-- Sidebar (Optional) -->
        <aside class="bg-white w-full md:w-64 p-4 shadow-md">
            <h2 class="text-2xl font-bold mb-4">Admin</h2>
            <nav class="flex flex-col gap-2">
                <a href="{{ route('admin.dashboard') }}" class="block bg-gray-200 p-2 rounded hover:bg-gray-300">Dashboard</a>
                <a href="{{ route('courses.index') }}" class="block bg-gray-200 p-2 rounded hover:bg-gray-300">Courses</a>
                <a href="{{ route('events.index') }}" class="block bg-gray-200 p-2 rounded hover:bg-gray-300">Events</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block w-full bg-gray-200 p-2 rounded text-red-500 hover:bg-gray-300">Logout</button>
                </form>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
