<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'RUANG ORGANISASI UKM/ORMAWA')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex min-h-screen flex-col bg-slate-100 text-slate-900">
    <x-navbar :username="$username ?? ''" />
    <main class="mx-auto w-full max-w-6xl flex-1 px-4 py-8 sm:px-6 lg:px-8">
        @include('components.notice', ['notice' => session('status')])
        @yield('content')
    </main>
    <x-footer />
</body>
</html>
