

<?php $__env->startSection('content'); ?>

<section class="rounded-3xl bg-gradient-to-br from-brand-700 to-brand-500 p-8 text-white">
    <p class="font-semibold">Yayasan Sosial Sumsel Peduli</p>

<h1 class="mt-3 max-w-3xl text-4xl font-bold">
    Platform donasi lokal transparan untuk masyarakat Sumatera Selatan.
</h1>

<p class="mt-4 max-w-2xl text-emerald-50">
    Donasi manual via transfer bank, wajib upload bukti, dan diverifikasi admin sebelum dana masuk ke progress campaign.
</p>

</section>

<div class="mt-8 grid gap-4 md:grid-cols-3">
    <?php if (isset($component)) { $__componentOriginal527fae77f4db36afc8c8b7e9f5f81682 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal527fae77f4db36afc8c8b7e9f5f81682 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.stat-card','data' => ['label' => 'Campaign Aktif','value' => $stats['campaigns']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Campaign Aktif','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($stats['campaigns'])]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.stat-card','data' => ['label' => 'Dana Terkumpul','value' => 'Rp '.number_format($stats['collected'],0,',','.')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Dana Terkumpul','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Rp '.number_format($stats['collected'],0,',','.'))]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.stat-card','data' => ['label' => 'Program Lokal','value' => $stats['beneficiaries']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Program Lokal','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($stats['beneficiaries'])]); ?>
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


</div>

<form class="mt-8 grid gap-3 rounded-2xl bg-white p-4 md:grid-cols-3">
    <input
        class="input"
        name="q"
        value="<?php echo e(request('q')); ?>"
        placeholder="Cari campaign"
    >


<select class="input" name="category">
    <option value="">Semua kategori</option>

    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option
            value="<?php echo e($category->slug); ?>"
            <?php if(request('category') === $category->slug): echo 'selected'; endif; ?>
        >
            <?php echo e($category->name); ?>

        </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>

<button class="btn-primary">
    Cari
</button>


</form>

<div class="mt-8 grid gap-6 md:grid-cols-2 xl:grid-cols-3">


<?php $__currentLoopData = $campaigns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $campaign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php
        $campaignImages = [
            'Bantu Seragam Sekolah Anak Banyuasin' => 'seragam.jpg',
            'Operasi Katarak Lansia Muara Enim' => 'katarak.jpg',
            'Bantuan Banjir Musi Rawas' => 'banjir.jpg',
            'Dapur Umum Warga Ogan Ilir' => 'dapur_umum.jpg',
            'Beasiswa Santri Prabumulih' => 'beasiswa.jpg',
            'Renovasi Rumah Dhuafa Lahat' => 'renovasi.jpg',
            'Ambulans Gratis Palembang' => 'ambulans.jpg',
            'Paket Gizi Anak OKU Timur' => 'gizi.jpg',
        ];

        $image = $campaignImages[$campaign->title] ?? 'seragam.jpg';
    ?>

    <article class="card flex h-full flex-col">

        <div class="overflow-hidden rounded-xl">
            <img
                src="<?php echo e(asset('images/' . $image)); ?>"
                alt="<?php echo e($campaign->title); ?>"
                class="aspect-video w-full object-cover transition duration-300 hover:scale-105"
            >
        </div>

        <p class="mt-4 text-xs font-semibold uppercase tracking-wide text-brand-700">
            <?php echo e($campaign->category->name); ?>

        </p>

        <h2 class="mt-2 min-h-[60px] text-lg font-bold text-slate-900">
            <?php echo e($campaign->title); ?>

        </h2>

        <p class="mt-2 min-h-[72px] text-sm text-slate-600">
            <?php echo e(\Illuminate\Support\Str::limit($campaign->short_description, 100)); ?>

        </p>

        <div class="mt-4 h-3 overflow-hidden rounded-full bg-slate-100">
            <div
                class="h-full bg-brand-600"
                style="width: <?php echo e(min(100, $campaign->progressPercentage())); ?>%"
            ></div>
        </div>

        <div class="mt-3">
            <p class="text-sm font-semibold text-slate-800">
                Rp <?php echo e(number_format($campaign->collected_amount,0,',','.')); ?>

            </p>

            <p class="text-xs text-slate-500">
                dari Rp <?php echo e(number_format($campaign->target_amount,0,',','.')); ?>

            </p>
        </div>

        <a
            class="btn-primary mt-auto w-full"
            href="<?php echo e(route('campaigns.show', $campaign->slug)); ?>"
        >
            Detail & Donasi
        </a>

    </article>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</div>

<div class="mt-8">
    <?php echo e($campaigns->links()); ?>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\coding\resources\views/welcome.blade.php ENDPATH**/ ?>