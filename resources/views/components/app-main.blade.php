<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard' }} - SIPOS</title>
    {{-- Font Google ya --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    @vite('resources/css/app.css')
</head>

<body class="bg-bgAll">
    <x-sidebar />
    <main class="pt-16 md:pl-64">
        <div class="p-2 pt-0">
            {{ $slot }}
        </div>
    </main>
</body>
<script src="js/sidebar.js"></script>

</html>
