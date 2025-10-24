<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard' }} - SIPOS</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="website icon" type="img" href="{{ asset('img/elsimil.png') }}">

    {{-- Font Google ya --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <x-sidebar />
    <main class="pt-16 md:pl-64">
        <div class="p-4">
            {{ $slot }}
        </div>
    </main>
</body>
{{-- Ini src chart --}}
@vite(['resources/js/app.js'])

</html>
