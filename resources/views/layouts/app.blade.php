<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Admin Panel Sumsel Peduli' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-800">
    <div class="min-h-screen lg:flex">
        <aside class="bg-emerald-950 text-white lg:fixed lg:inset-y-0 lg:w-72">
            <div class="flex h-20 items-center border-b border-white/10 px-6">
                <div>
                    <p class="text-sm uppercase tracking-widest text-emerald-200">Admin Panel</p>
                    <h1 class="text-xl font-bold">Sumsel Peduli</h1>
                </div>
            </div>

            <nav class="space-y-2 px-4 py-6">
                <a
                    class="flex items-center rounded-xl px-4 py-3 font-semibold hover:bg-white/10 {{ request()->routeIs('dashboard') ? 'bg-white/15' : '' }}"
                    href="{{ route('dashboard') }}"
                >
                    Dashboard Admin
                </a>

                <a
                    class="flex items-center justify-between rounded-xl px-4 py-3 font-semibold hover:bg-white/10 {{ request()->routeIs('admin.campaigns.*') ? 'bg-white/15' : '' }}"
                    href="{{ route('admin.campaigns.index') }}"
                >
                    <span>Verifikasi Campaign</span>
                    @isset($stats)
                        <span class="rounded-full bg-amber-400 px-2 py-0.5 text-xs text-amber-950">
                            {{ $stats['pendingCampaigns'] ?? 0 }}
                        </span>
                    @endisset
                </a>

                <a
                    class="flex items-center justify-between rounded-xl px-4 py-3 font-semibold hover:bg-white/10 {{ request()->routeIs('admin.donations.*') ? 'bg-white/15' : '' }}"
                    href="{{ route('admin.donations.index') }}"
                >
                    <span>Verifikasi Donasi</span>
                    @isset($stats)
                        <span class="rounded-full bg-amber-400 px-2 py-0.5 text-xs text-amber-950">
                            {{ $stats['pendingDonations'] ?? 0 }}
                        </span>
                    @endisset
                </a>

                <a
                    class="flex items-center rounded-xl px-4 py-3 font-semibold hover:bg-white/10"
                    href="{{ route('fundraiser.campaigns.index') }}"
                >
                    Kelola Campaign
                </a>

                <a
                    class="flex items-center rounded-xl px-4 py-3 font-semibold hover:bg-white/10"
                    href="{{ route('home') }}"
                >
                    Lihat Website
                </a>
            </nav>

            <div class="border-t border-white/10 p-4 text-sm text-emerald-100">
                @auth
                    <p class="font-semibold">{{ auth()->user()->name }}</p>
                    <p>{{ auth()->user()->email }}</p>

                    @if(auth()->user()->isRole('admin'))
                        <a class="block mt-3 font-semibold text-emerald-200" href="{{ route('dashboard') }}">
                            Admin Panel
                        </a>
                    @else
                        <a class="block mt-3" href="{{ route('dashboard') }}">
                            Dashboard
                        </a>
                    @endif

                    <form class="mt-4" method="post" action="{{ route('logout') }}">
                        @csrf
                        <button class="w-full rounded-xl bg-white/10 px-4 py-2 font-semibold hover:bg-white/20">
                            Logout
                        </button>
                    </form>
                @else
                    <div class="flex gap-2">
                        <a class="font-semibold" href="{{ route('login') }}">Login</a>
                        <a class="rounded-xl bg-amber-400 px-3 py-1 text-xs font-semibold text-amber-950" href="{{ route('register') }}">Daftar</a>
                    </div>
                @endauth
            </div>
        </aside>

        <div class="lg:ml-72 lg:flex-1">
            <header class="sticky top-0 z-10 border-b border-slate-200 bg-white/90 backdrop-blur">
                <div class="flex items-center justify-between px-6 py-4">
                    <div>
                        <p class="text-sm text-slate-500">Panel pengelolaan yayasan</p>
                        <h2 class="text-2xl font-bold text-slate-900">
                            @yield('page-title', 'Dashboard Admin')
                        </h2>
                    </div>
                    <div class="rounded-2xl bg-emerald-50 px-4 py-2 text-sm font-semibold text-emerald-700">
                        {{ now()->translatedFormat('d F Y') }}
                    </div>
                </div>
            </header>

            @if(session('success'))
                <div class="mx-6 mt-6 rounded-2xl border border-emerald-200 bg-emerald-50 p-4 text-emerald-800">
                    {{ session('success') }}
                </div>
            @endif

            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>