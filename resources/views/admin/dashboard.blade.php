@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="mb-6">
        <h1 class="text-3xl font-bold">Welcome, {{ Auth::user()->name }} 👋</h1>
        <p class="text-gray-600 mt-1">Here’s a quick overview of your educational institute panel.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Courses Card -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold">Courses</h2>
            <p class="text-gray-500">Manage all available courses</p>
            <a href="{{ route('courses.index') }}" class="text-blue-600 mt-2 inline-block bg-gray-200 p-2 rounded hover:bg-gray-300">View Courses →</a>
        </div>

        <!-- Events Card -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold">Events</h2>
            <p class="text-gray-500">Manage institute events</p>
            <a href="{{ route('events.index') }}" class="text-blue-600 mt-2 inline-block bg-gray-200 p-2 rounded hover:bg-gray-300">View Events →</a>
        </div>

        <!-- Users Card (Optional) -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold">Users</h2>
            <p class="text-gray-500">Manage registered users</p>
            <a href="#" class="text-blue-600 mt-2 inline-block bg-gray-200 p-2 rounded hover:bg-gray-300">View Users →</a>
        </div>
    </div>
@endsection
