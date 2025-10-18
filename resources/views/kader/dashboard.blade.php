<x-app-main :title="'Dashboard'">
    <h1 class="text-2xl font-bold">Dashboard</h1>
    <p>haloo {{ Auth::user()->name }}, selamat datang di dashboard</p>
</x-app-main>
