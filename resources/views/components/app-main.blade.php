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
    <div class="flex">
        <x-sidebar />
        <main class="ml-64 flex-1 p-6">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
