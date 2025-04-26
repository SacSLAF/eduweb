<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-900 min-h-screen">
    <div class="flex flex-col md:flex-row min-h-screen">
        @include('components.admin.sidebar')

        <div class="flex-1 flex flex-col">
            @include('components.admin.header')

            <main class="flex-1 p-4">
                @yield('content')
            </main>

            @include('components.admin.footer')
        </div>
    </div>
</body>

</html>
