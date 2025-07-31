<nav class="flex-1 px-4 py-4 space-y-2 bg-white">
    <a href="{{ route('admin.dashboard') }}"
       class="flex items-center px-4 py-2 text-gray-700 rounded-md hover:bg-gray-200 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-200' : '' }}">
        <span class="mr-3"><!-- Icon SVG --></span>
        Dashboard
    </a>
    <a href="{{ route('admin.users.index') }}"
       class="flex items-center px-4 py-2 text-gray-700 rounded-md hover:bg-gray-200 {{ request()->routeIs('admin.users.*') ? 'bg-gray-200' : '' }}">
        <span class="mr-3"><!-- Icon SVG --></span>
        Manajemen Pengguna
    </a>
    <a href="{{ route('admin.messages.index') }}"
       class="flex items-center px-4 py-2 text-gray-700 rounded-md hover:bg-gray-200 {{ request()->routeIs('admin.messages.*') ? 'bg-gray-200' : '' }}">
        <span class="mr-3"><!-- Icon SVG --></span>
        Pesan Masuk
    </a>
     <a href="{{ route('admin.forum.index') }}"
       class="flex items-center px-4 py-2 text-gray-700 rounded-md hover:bg-gray-200 {{ request()->routeIs('admin.forum.*') ? 'bg-gray-200' : '' }}">
        <span class="mr-3"><!-- Icon SVG --></span>
        Manajemen Forum
    </a>
    <!-- Tambahkan link untuk Artikel/Event di sini -->
</nav>