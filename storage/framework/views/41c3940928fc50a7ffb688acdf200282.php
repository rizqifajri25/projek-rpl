

<?php $__env->startSection('page-title', 'Verifikasi Donasi'); ?>

<?php $__env->startSection('content'); ?>
<?php
    $maxMonthlyDonation = max($monthlyDonations->max('total'), 1);
?>

<section class="grid gap-4 md:grid-cols-2 xl:grid-cols-4">
    <?php if (isset($component)) { $__componentOriginal527fae77f4db36afc8c8b7e9f5f81682 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal527fae77f4db36afc8c8b7e9f5f81682 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.stat-card','data' => ['label' => 'Total Campaign','value' => $stats['campaigns']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Total Campaign','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($stats['campaigns'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal527fae77f4db36afc8c8b7e9f5f81682)): ?>
<?php $attributes = $__attributesOriginal527fae77f4db36afc8c8b7e9f5f81682; ?>
<?php unset($__attributesOriginal527fae77f4db36afc8c8b7e9f5f81682); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal527fae77f4db36afc8c8b7e9f5f81682)): ?>
<?php $component = $__componentOriginal527fae77f4db36afc8c8b7e9f5f81682; ?>
<?php unset($__componentOriginal527fae77f4db36afc8c8b7e9f5f81682); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal527fae77f4db36afc8c8b7e9f5f81682 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal527fae77f4db36afc8c8b7e9f5f81682 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.stat-card','data' => ['label' => 'Campaign Aktif','value' => $stats['activeCampaigns']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Campaign Aktif','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($stats['activeCampaigns'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal527fae77f4db36afc8c8b7e9f5f81682)): ?>
<?php $attributes = $__attributesOriginal527fae77f4db36afc8c8b7e9f5f81682; ?>
<?php unset($__attributesOriginal527fae77f4db36afc8c8b7e9f5f81682); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal527fae77f4db36afc8c8b7e9f5f81682)): ?>
<?php $component = $__componentOriginal527fae77f4db36afc8c8b7e9f5f81682; ?>
<?php unset($__componentOriginal527fae77f4db36afc8c8b7e9f5f81682); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal527fae77f4db36afc8c8b7e9f5f81682 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal527fae77f4db36afc8c8b7e9f5f81682 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.stat-card','data' => ['label' => 'Total Donasi Verified','value' => 'Rp '.number_format($stats['verifiedDonations'], 0, ',', '.')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Total Donasi Verified','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Rp '.number_format($stats['verifiedDonations'], 0, ',', '.'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal527fae77f4db36afc8c8b7e9f5f81682)): ?>
<?php $attributes = $__attributesOriginal527fae77f4db36afc8c8b7e9f5f81682; ?>
<?php unset($__attributesOriginal527fae77f4db36afc8c8b7e9f5f81682); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal527fae77f4db36afc8c8b7e9f5f81682)): ?>
<?php $component = $__componentOriginal527fae77f4db36afc8c8b7e9f5f81682; ?>
<?php unset($__componentOriginal527fae77f4db36afc8c8b7e9f5f81682); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal527fae77f4db36afc8c8b7e9f5f81682 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal527fae77f4db36afc8c8b7e9f5f81682 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.stat-card','data' => ['label' => 'Donatur Terdaftar','value' => $stats['donors']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Donatur Terdaftar','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($stats['donors'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal527fae77f4db36afc8c8b7e9f5f81682)): ?>
<?php $attributes = $__attributesOriginal527fae77f4db36afc8c8b7e9f5f81682; ?>
<?php unset($__attributesOriginal527fae77f4db36afc8c8b7e9f5f81682); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal527fae77f4db36afc8c8b7e9f5f81682)): ?>
<?php $component = $__componentOriginal527fae77f4db36afc8c8b7e9f5f81682; ?>
<?php unset($__componentOriginal527fae77f4db36afc8c8b7e9f5f81682); ?>
<?php endif; ?>
</section>

<section class="mt-6 grid gap-6 xl:grid-cols-3">
    <div class="card xl:col-span-2">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-xl font-bold text-slate-900">
                    Statistik Donasi Tahun <?php echo e(now()->year); ?>

                </h3>
                <p class="text-sm text-slate-500">
                    Ringkasan donasi terverifikasi per bulan.
                </p>
            </div>
            <span class="badge bg-emerald-100 text-emerald-700">Manual Transfer</span>
        </div>

        <div class="mt-6 flex h-64 items-end gap-3 border-b border-slate-200 pb-4">
            <?php $__currentLoopData = $monthlyDonations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex flex-1 flex-col items-center gap-2">
                    <div class="flex h-48 w-full items-end rounded-t-xl bg-slate-100">
                        <div
                            class="w-full rounded-t-xl bg-brand-600"
                            style="height: <?php echo e(max(6, ($item['total'] / $maxMonthlyDonation) * 100)); ?>%"
                        ></div>
                    </div>
                    <span class="text-xs font-semibold text-slate-500">
                        <?php echo e($item['label']); ?>

                    </span>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div class="card">
        <h3 class="text-xl font-bold text-slate-900">Antrian Verifikasi</h3>

        <div class="mt-5 space-y-4">
            <a
                href="<?php echo e(route('admin.campaigns.index')); ?>"
                class="flex items-center justify-between rounded-2xl border border-amber-200 bg-amber-50 p-4 hover:bg-amber-100"
            >
                <div>
                    <p class="font-bold text-amber-900">Campaign Pending</p>
                    <p class="text-sm text-amber-700">Butuh approve/reject admin</p>
                </div>
                <span class="text-3xl font-bold text-amber-700">
                    <?php echo e($stats['pendingCampaigns']); ?>

                </span>
            </a>

            <a
                href="<?php echo e(route('admin.donations.index')); ?>"
                class="flex items-center justify-between rounded-2xl border border-emerald-200 bg-emerald-50 p-4 hover:bg-emerald-100"
            >
                <div>
                    <p class="font-bold text-emerald-900">Donasi Pending</p>
                    <p class="text-sm text-emerald-700">Cek bukti transfer</p>
                </div>
                <span class="text-3xl font-bold text-emerald-700">
                    <?php echo e($stats['pendingDonations']); ?>

                </span>
            </a>

            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                <p class="font-bold text-slate-900">Fundraiser</p>
                <p class="mt-1 text-3xl font-bold text-slate-700">
                    <?php echo e($stats['fundraisers']); ?>

                </p>
            </div>
        </div>
    </div>
</section>

<section class="mt-6 grid gap-6 xl:grid-cols-2">
    <div class="card">
        <div class="flex items-center justify-between">
            <h3 class="text-xl font-bold text-slate-900">
                Campaign Menunggu Verifikasi
            </h3>
            <a class="text-sm font-semibold text-brand-700" href="<?php echo e(route('admin.campaigns.index')); ?>">
                Lihat semua
            </a>
        </div>

        <div class="mt-4 space-y-3">
            <?php $__empty_1 = true; $__currentLoopData = $pendingCampaigns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $campaign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="rounded-2xl border border-slate-200 p-4">
                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <p class="font-bold text-slate-900"><?php echo e($campaign->title); ?></p>
                            <p class="text-sm text-slate-500">
                                <?php echo e($campaign->category->name); ?> · <?php echo e($campaign->fundraiser->name); ?>

                            </p>
                        </div>
                        <span class="badge bg-amber-100 text-amber-700">Pending</span>
                    </div>

                    <form
                        class="mt-3 flex flex-col gap-2 md:flex-row"
                        method="post"
                        action="<?php echo e(route('admin.campaigns.verify', $campaign)); ?>"
                    >
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('patch'); ?>

                        <input class="input md:mt-0" name="admin_notes" placeholder="Catatan verifikasi singkat">

                        <button class="btn-primary" name="action" value="approve">
                            Approve
                        </button>
                        <button class="btn-secondary" name="action" value="reject">
                            Reject
                        </button>
                    </form>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="rounded-2xl bg-slate-50 p-4 text-slate-500">
                    Tidak ada campaign pending.
                </p>
            <?php endif; ?>
        </div>
    </div>

    <div class="card">
        <div class="flex items-center justify-between">
            <h3 class="text-xl font-bold text-slate-900">
                Donasi Menunggu Verifikasi
            </h3>
            <a class="text-sm font-semibold text-brand-700" href="<?php echo e(route('admin.donations.index')); ?>">
                Lihat semua
            </a>
        </div>

        <div class="mt-4 space-y-3">
            <?php $__empty_1 = true; $__currentLoopData = $pendingDonations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="rounded-2xl border border-slate-200 p-4">
                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <p class="font-bold text-slate-900"><?php echo e($donation->donor_name); ?></p>
                            <p class="text-sm text-slate-500"><?php echo e($donation->campaign->title); ?></p>
                        </div>
                        <span class="font-bold text-brand-700">
                            Rp <?php echo e(number_format($donation->amount, 0, ',', '.')); ?>

                        </span>
                    </div>

                    <div class="mt-3 flex items-center justify-between rounded-xl bg-slate-50 p-3 text-sm">
                        <span>
                            <?php echo e($donation->proof?->bank_name); ?> · <?php echo e($donation->proof?->account_name); ?>

                        </span>

                        <?php if($donation->proof): ?>
                            <a
                                class="font-semibold text-brand-700"
                                href="<?php echo e(Storage::url($donation->proof->file_path)); ?>"
                                target="_blank"
                            >
                                Bukti transfer
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="rounded-2xl bg-slate-50 p-4 text-slate-500">
                    Tidak ada donasi pending.
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="card mt-6">
    <h3 class="text-xl font-bold text-slate-900">Audit Log Verifikasi Terbaru</h3>

    <div class="mt-4 overflow-x-auto">
        <table class="w-full text-left text-sm">
            <thead class="border-b text-slate-500">
                <tr>
                    <th class="py-3">Waktu</th>
                    <th>Admin</th>
                    <th>Aksi</th>
                    <th>Catatan</th>
                    <th>IP</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <?php $__empty_1 = true; $__currentLoopData = $recentLogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="py-3"><?php echo e($log->created_at->format('d M Y H:i')); ?></td>
                        <td><?php echo e($log->admin->name); ?></td>
                        <td>
                            <span class="badge bg-slate-100 text-slate-700">
                                <?php echo e($log->action); ?>

                            </span>
                        </td>
                        <td><?php echo e($log->notes ?: '-'); ?></td>
                        <td><?php echo e($log->ip_address ?: '-'); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="5" class="py-4 text-slate-500">
                            Belum ada audit log.
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\coding\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>