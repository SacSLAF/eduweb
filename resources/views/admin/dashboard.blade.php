@extends('layouts.admin-2')

@section('title', 'Dashboard')

@section('content')
    <div class="mb-6">
        <h1 class="text-3xl font-bold">Welcome, {{ Auth::user()->name }} 👋</h1>
        <p class="text-gray-600 mt-2">Here’s a quick overview of your educational institute panel.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1 - Courses -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="flex items-center mb-4">
                <span class="material-icons text-4xl text-blue-500 mr-4">menu_book</span>
                <div>
                    <h2 class="text-xl font-semibold">Courses</h2>
                    <p class="text-gray-500">Manage all available courses</p>
                </div>
            </div>
            <div class="text-3xl font-semibold text-gray-800 mb-4">15</div> <!-- Example Stats -->
            <a href="{{ route('courses.index') }}" class="text-blue-600 font-medium hover:underline">View Courses →</a>
        </div>

        <!-- Card 2 - Events -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="flex items-center mb-4">
                <span class="material-icons text-4xl text-blue-500 mr-4">event</span>
                <div>
                    <h2 class="text-xl font-semibold">Events</h2>
                    <p class="text-gray-500">Manage institute events</p>
                </div>
            </div>
            <div class="text-3xl font-semibold text-gray-800 mb-4">8</div> <!-- Example Stats -->
            <a href="{{ route('events.index') }}" class="text-blue-600 font-medium hover:underline">View Events →</a>
        </div>

        <!-- Card 3 - Users -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="flex items-center mb-4">
                <span class="material-icons text-4xl text-blue-500 mr-4">person</span>
                <div>
                    <h2 class="text-xl font-semibold">Users</h2>
                    <p class="text-gray-500">Manage registered users</p>
                </div>
            </div>
            <div class="text-3xl font-semibold text-gray-800 mb-4">120</div> <!-- Example Stats -->
            <a href="#" class="text-blue-600 font-medium hover:underline">View Users →</a>
        </div>
    </div>
@endsection
