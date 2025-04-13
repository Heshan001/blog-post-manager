<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post Manager</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    @stack('styles')
</head>
<body class="h-full flex flex-col bg-gray-100 font-sans">

    <!-- Header -->
    <header>
        <nav class="bg-blue-600 p-4 text-white">
            <div class="container mx-auto">
                <a href="{{ route('posts.index') }}" class="text-xl font-bold">Blog Post Manager</a>
            </div>
        </nav>
    </header>

    <!-- Main Content Area -->
    <main class="flex-grow container mx-auto p-4">
        @yield('content')
    </main>

    <!-- Fixed Footer -->
    <footer class="bg-blue-600 p-4 text-white text-center">
        <p>&copy; 2025 Blog Post Manager</p>
    </footer>

    @stack('scripts')
</body>
</html>
