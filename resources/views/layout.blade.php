<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Mahasiswa')</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .sidebar {
            background: linear-gradient(180deg, #0f766e, #115e59);
        }

        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .active-link {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .transition-all {
            transition: all 0.3s ease-in-out;
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen text-gray-800">

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="sidebar w-64 text-white p-6 space-y-6 shadow-lg">
            <div class="text-2xl font-bold tracking-wide mb-6 flex items-center gap-2">
                🎓 <span>Mahasiswa</span>
            </div>
            <nav class="space-y-2">
                <a href="/" class="block px-4 py-2 rounded transition-all hover:translate-x-1">🏠 Beranda</a>
                <a href="{{ route('mahasiswa.index') }}"
                    class="block px-4 py-2 rounded transition-all hover:translate-x-1">📋 Data Mahasiswa</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Top Bar -->
            <header class="bg-white shadow px-8 py-4 flex justify-between items-center">
                <h1 class="text-2xl font-semibold">@yield('title', 'Dashboard')</h1>
                <div class="flex items-center gap-3">
                    <span class="text-gray-600 text-sm">Hai, <strong>Shaiful Anam</strong></span>
                    <img src="https://ui-avatars.com/api/?name=Shaiful Anam" alt="User"
                        class="rounded-full w-8 h-8 shadow-md">
                </div>
            </header>

            <!-- Content -->
            <main class="p-8">
                <div class="bg-white p-6 rounded-lg shadow">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

</body>

</html>