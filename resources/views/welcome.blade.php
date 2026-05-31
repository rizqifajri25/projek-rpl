@extends('layouts.app')

@section('content')

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
    <x-stat-card
        label="Campaign Aktif"
        :value="$stats['campaigns']"
    />


<x-stat-card
    label="Dana Terkumpul"
    :value="'Rp '.number_format($stats['collected'],0,',','.')"
/>

<x-stat-card
    label="Program Lokal"
    :value="$stats['beneficiaries']"
/>


</div>

<form class="mt-8 grid gap-3 rounded-2xl bg-white p-4 md:grid-cols-3">
    <input
        class="input"
        name="q"
        value="{{ request('q') }}"
        placeholder="Cari campaign"
    >


<select class="input" name="category">
    <option value="">Semua kategori</option>

    @foreach($categories as $category)
        <option
            value="{{ $category->slug }}"
            @selected(request('category') === $category->slug)
        >
            {{ $category->name }}
        </option>
    @endforeach
</select>

<button class="btn-primary">
    Cari
</button>


</form>

<div class="mt-8 grid gap-6 md:grid-cols-2 xl:grid-cols-3">


@foreach($campaigns as $campaign)

    @php
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
    @endphp

    <article class="card flex h-full flex-col">

        <div class="overflow-hidden rounded-xl">
            <img
                src="{{ asset('images/' . $image) }}"
                alt="{{ $campaign->title }}"
                class="aspect-video w-full object-cover transition duration-300 hover:scale-105"
            >
        </div>

        <p class="mt-4 text-xs font-semibold uppercase tracking-wide text-brand-700">
            {{ $campaign->category->name }}
        </p>

        <h2 class="mt-2 min-h-[60px] text-lg font-bold text-slate-900">
            {{ $campaign->title }}
        </h2>

        <p class="mt-2 min-h-[72px] text-sm text-slate-600">
            {{ \Illuminate\Support\Str::limit($campaign->short_description, 100) }}
        </p>

        <div class="mt-4 h-3 overflow-hidden rounded-full bg-slate-100">
            <div
                class="h-full bg-brand-600"
                style="width: {{ min(100, $campaign->progressPercentage()) }}%"
            ></div>
        </div>

        <div class="mt-3">
            <p class="text-sm font-semibold text-slate-800">
                Rp {{ number_format($campaign->collected_amount,0,',','.') }}
            </p>

            <p class="text-xs text-slate-500">
                dari Rp {{ number_format($campaign->target_amount,0,',','.') }}
            </p>
        </div>

        <a
            class="btn-primary mt-auto w-full"
            href="{{ route('campaigns.show', $campaign->slug) }}"
        >
            Detail & Donasi
        </a>

    </article>

@endforeach


</div>

<div class="mt-8">
    {{ $campaigns->links() }}
</div>

@endsection
