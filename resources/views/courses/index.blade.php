@extends('layouts.admin-2')

@section('title', 'Courses')

@section('content')
    <div class="mb-6">
        <h1 class="text-3xl font-bold">Welcome, {{ Auth::user()->name }} 👋</h1>
        <p class="text-gray-600 mt-2">Here’s a quick overview of your educational institute panel.</p>
    </div>
    @if (session('success'))
        <div class="mb-4 p-4 text-green-700 bg-green-100 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="mb-4 p-4 text-red-700 bg-red-100 rounded-lg">
            {{ session('error') }}
        </div>
    @endif
    <div class="mx-auto w-full overflow-hidden rounded-xl bg-white shadow-md md:w-full">
        {{-- <div class="mx-auto max-w-lg overflow-hidden rounded-xl bg-white shadow-md md:max-w-2xl"> --}}
        <!-- Card 1 - Courses -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="flex items-center justify-between mb-4">
                <!-- Icon and Text Section -->
                <div class="flex items-center">
                    <span class="material-icons text-4xl text-blue-500 mr-4">menu_book</span>
                    <div>
                        <h2 class="text-xl font-semibold">Courses</h2>
                        <p class="text-gray-500">Manage all available courses</p>
                    </div>
                </div>

                <!-- Add Course Button -->
                <div>
                    <a href="{{ route('courses.create') }}"
                        class="bg-blue-500 !important hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">
                        Add Course
                    </a>
                </div>
            </div>

            <table class="w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                            S.No
                        </th>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                            Name
                        </th>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                            Description
                        </th>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                            Duration
                        <th
                            class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">
                                {{ $loop->iteration }}
                            </td>
                            <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">
                                {{ $course->title }}
                            </td>
                            <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">
                                {{ $course->description }}
                            </td>
                            <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">
                                {{ $course->start_date }} - {{ $course->end_date }}
                            </td>
                            <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">
                                <a href="{{ route('courses.edit', $course->id) }}"
                                    class="text-blue-500 hover:underline">Edit</a>
                                    <button type="button" class="text-red-500 hover:underline ml-2" onclick="confirmDelete({{ $course->id }})">
                                        Delete
                                    </button>
                                    
                                    <!-- Hidden delete form for the course -->
                                    <form id="delete-form-{{ $course->id }}" action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>                               
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
<script>
    function confirmDelete(id) {
        // Trigger SweetAlert confirmation
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit the form when confirmed
                document.getElementById('delete-form-' + id).submit();
            }
        })
    }
</script>
