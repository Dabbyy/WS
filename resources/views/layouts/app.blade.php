<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Smooth fade-in effect */
        body {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Navbar hover effect */
        .nav-link {
            transition: transform 0.2s ease-in-out;
        }
        .nav-link:hover {
            transform: scale(1.1);
        }

        /* Card styling */
        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900 flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">My Laravel App</h1>
            <div class="flex space-x-4">
                <a href="{{ route('home') }}" class="nav-link text-lg font-semibold">Home</a>
                <a href="{{ route('about') }}" class="nav-link text-lg font-semibold">About</a>
                <a href="{{ route('contact') }}" class="nav-link text-lg font-semibold">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto mt-10">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="mt-auto bg-gray-800 text-white p-4 text-center">
        <p>&copy; {{ date('Y') }} My Laravel App. All rights reserved.</p>
    </footer>

</body>
</html>
