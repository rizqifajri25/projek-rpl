<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e($title ?? 'Admin Panel Sumsel Peduli'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
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
                    class="flex items-center rounded-xl px-4 py-3 font-semibold hover:bg-white/10 <?php echo e(request()->routeIs('dashboard') ? 'bg-white/15' : ''); ?>"
                    href="<?php echo e(route('dashboard')); ?>"
                >
                    Dashboard Admin
                </a>

                <a
                    class="flex items-center justify-between rounded-xl px-4 py-3 font-semibold hover:bg-white/10 <?php echo e(request()->routeIs('admin.campaigns.*') ? 'bg-white/15' : ''); ?>"
                    href="<?php echo e(route('admin.campaigns.index')); ?>"
                >
                    <span>Verifikasi Campaign</span>
                    <?php if(isset($stats)): ?>
                        <span class="rounded-full bg-amber-400 px-2 py-0.5 text-xs text-amber-950">
                            <?php echo e($stats['pendingCampaigns'] ?? 0); ?>

                        </span>
                    <?php endif; ?>
                </a>

                <a
                    class="flex items-center justify-between rounded-xl px-4 py-3 font-semibold hover:bg-white/10 <?php echo e(request()->routeIs('admin.donations.*') ? 'bg-white/15' : ''); ?>"
                    href="<?php echo e(route('admin.donations.index')); ?>"
                >
                    <span>Verifikasi Donasi</span>
                    <?php if(isset($stats)): ?>
                        <span class="rounded-full bg-amber-400 px-2 py-0.5 text-xs text-amber-950">
                            <?php echo e($stats['pendingDonations'] ?? 0); ?>

                        </span>
                    <?php endif; ?>
                </a>

                <a
                    class="flex items-center rounded-xl px-4 py-3 font-semibold hover:bg-white/10"
                    href="<?php echo e(route('fundraiser.campaigns.index')); ?>"
                >
                    Kelola Campaign
                </a>

                <a
                    class="flex items-center rounded-xl px-4 py-3 font-semibold hover:bg-white/10"
                    href="<?php echo e(route('home')); ?>"
                >
                    Lihat Website
                </a>
            </nav>

            <div class="border-t border-white/10 p-4 text-sm text-emerald-100">
                <?php if(auth()->guard()->check()): ?>
                    <p class="font-semibold"><?php echo e(auth()->user()->name); ?></p>
                    <p><?php echo e(auth()->user()->email); ?></p>

                    <?php if(auth()->user()->isRole('admin')): ?>
                        <a class="block mt-3 font-semibold text-emerald-200" href="<?php echo e(route('dashboard')); ?>">
                            Admin Panel
                        </a>
                    <?php else: ?>
                        <a class="block mt-3" href="<?php echo e(route('dashboard')); ?>">
                            Dashboard
                        </a>
                    <?php endif; ?>

                    <form class="mt-4" method="post" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <button class="w-full rounded-xl bg-white/10 px-4 py-2 font-semibold hover:bg-white/20">
                            Logout
                        </button>
                    </form>
                <?php else: ?>
                    <div class="flex gap-2">
                        <a class="font-semibold" href="<?php echo e(route('login')); ?>">Login</a>
                        <a class="rounded-xl bg-amber-400 px-3 py-1 text-xs font-semibold text-amber-950" href="<?php echo e(route('register')); ?>">Daftar</a>
                    </div>
                <?php endif; ?>
            </div>
        </aside>

        <div class="lg:ml-72 lg:flex-1">
            <header class="sticky top-0 z-10 border-b border-slate-200 bg-white/90 backdrop-blur">
                <div class="flex items-center justify-between px-6 py-4">
                    <div>
                        <p class="text-sm text-slate-500">Panel pengelolaan yayasan</p>
                        <h2 class="text-2xl font-bold text-slate-900">
                            <?php echo $__env->yieldContent('page-title', 'Dashboard Admin'); ?>
                        </h2>
                    </div>
                    <div class="rounded-2xl bg-emerald-50 px-4 py-2 text-sm font-semibold text-emerald-700">
                        <?php echo e(now()->translatedFormat('d F Y')); ?>

                    </div>
                </div>
            </header>

            <?php if(session('success')): ?>
                <div class="mx-6 mt-6 rounded-2xl border border-emerald-200 bg-emerald-50 p-4 text-emerald-800">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <main class="p-6">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
    </div>
</body>
</html><?php /**PATH D:\coding\resources\views/layouts/app.blade.php ENDPATH**/ ?>