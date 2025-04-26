<!-- Mobile Hamburger Button -->
<div class="md:hidden flex items-center justify-between bg-white p-4 shadow-md">
    <h2 class="text-xl font-bold">Admin</h2>
    <button id="menu-toggle" class="text-gray-800 focus:outline-none">
        <!-- Hamburger icon -->
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>
</div>

<!-- Sidebar -->
<aside id="sidebar"
    class="bg-gradient-to-l from-cyan-500 to-blue-500 w-64 p-4 shadow-md absolute md:relative md:translate-x-0 -translate-x-full transition-transform duration-300 z-50 h-full md:h-auto md:block hidden md:flex flex-col">
    <h2 class="text-2xl font-bold mb-4 hidden md:block">Admin</h2>
    <nav class="flex flex-col space-y-4">
        <a href="{{ route('admin.dashboard') }}"
            class="flex items-center px-4 py-2 rounded hover:bg-white {{ request()->routeIs('admin.dashboard') ? 'bg-white font-semibold' : '' }}">
            <span class="material-icons mr-2">dashboard</span> Dashboard
        </a>

        <a href="{{ route('courses.index') }}"
            class="flex items-center px-4 py-2 rounded hover:bg-white {{ request()->routeIs('courses.*') ? 'bg-white font-semibold' : '' }}">
            <span class="material-icons mr-2">menu_book</span> Courses
        </a>

        <a href="{{ route('events.index') }}"
            class="flex items-center px-4 py-2 rounded hover:bg-white {{ request()->routeIs('events.*') ? 'bg-white font-semibold' : '' }}">
            <span class="material-icons mr-2">event</span> Events
        </a>

        <form method="POST" action="{{ route('logout') }}" class="mt-6">
            @csrf
            <button type="submit"
                class="flex items-center w-full text-left px-4 py-2 rounded hover:bg-white text-black">
                <span class="material-icons mr-2">logout</span> Logout
            </button>
        </form>
    </nav>
</aside>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const menuToggle = document.getElementById("menu-toggle");
        const sidebar = document.getElementById("sidebar");

        menuToggle.addEventListener("click", function () {
            sidebar.classList.toggle("-translate-x-full");
            sidebar.classList.toggle("md:flex");
            sidebar.classList.toggle("hidden");
        });
    });
</script>
