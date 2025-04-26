@extends('layouts.admin-2')
@section('title', 'Create Course')
@section('content')
    <div class="mx-auto w-full p-8 bg-white rounded-xl shadow-md">
        <h1 class="text-2xl font-bold mb-6">Create a New Course</h1>
        @if ($errors->any())
            <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label for="category" class="block text-gray-700 font-medium mb-2">Category</label>
                <input type="text" name="category" id="category"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Enter course category">
            </div>

            <div>
                <label for="title" class="block text-gray-700 font-medium mb-2">Course Title</label>
                <input type="text" name="title" id="title"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Enter course title" required>
            </div>

            <div>
                <label for="lessons_count" class="block text-gray-700 font-medium mb-2">Lessons Count</label>
                <input type="number" name="lessons_count" id="lessons_count"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Enter number of lessons">
            </div>

            <div>
                <label for="rating" class="block text-gray-700 font-medium mb-2">Rating</label>
                <input type="number" step="0.01" name="rating" id="rating"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Enter course rating (e.g., 4.5)">
            </div>

            <div>
                <label for="description" class="block text-gray-700 font-medium mb-2">Course Description</label>
                <textarea name="description" id="description" rows="5"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Enter course description" required></textarea>
            </div>

            <div>
                <label for="seats" class="block text-gray-700 font-medium mb-2">Seats</label>
                <input type="number" name="seats" id="seats"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Enter number of available seats">
            </div>

            <div>
                <label for="price" class="block text-gray-700 font-medium mb-2">Course Price</label>
                <input type="number" step="0.01" name="price" id="price"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Enter course price" required>
            </div>

            <div>
                <label for="image" class="block text-gray-700 font-medium mb-2">Course Image</label>
                <input type="file" name="image" id="image" 
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label for="start_date" class="block text-gray-700 font-medium mb-2">Start Date</label>
                <input type="date" name="start_date" id="start_date"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    required>
            </div>

            <div>
                <label for="end_date" class="block text-gray-700 font-medium mb-2">End Date</label>
                <input type="date" name="end_date" id="end_date"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    required>
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 rounded-lg transition duration-300">
                    Create Course
                </button>
            </div>
        </form>

    </div>
@endsection
