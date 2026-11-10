@props(['username' => ''])

<header class="bg-slate-950 text-white">
	<nav aria-label="Navigasi utama" class="mx-auto flex max-w-6xl flex-wrap items-center gap-x-6 gap-y-3 px-4 py-4 sm:px-6 lg:px-8">
		<a href="{{ $username ? route('dashboard') : route('login') }}" class="mr-auto text-base font-bold tracking-wide">RUANG ORGANISASI UKM/ORMAWA <span class="text-indigo-300">2026</span></a>
		@if ($username)
			<a href="{{ route('dashboard') }}" class="text-sm font-medium text-slate-200 hover:text-white">Dashboard</a>
			<a href="{{ route('pengelolaan') }}" class="text-sm font-medium text-slate-200 hover:text-white">Pengelolaan</a>
			<a href="{{ route('profile') }}" class="text-sm font-medium text-slate-200 hover:text-white">Profile</a>
		@endif
	</nav>
</header>
