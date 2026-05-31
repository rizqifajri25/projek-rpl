@extends('layouts.app')

@section('page-title', 'Verifikasi Donasi')

@section('content')
@php
    $maxMonthlyDonation = max($monthlyDonations->max('total'), 1);
@endphp

<section class="grid gap-4 md:grid-cols-2 xl:grid-cols-4">
    <x-stat-card label="Total Campaign" :value="$stats['campaigns']" />
    <x-stat-card label="Campaign Aktif" :value="$stats['activeCampaigns']" />
    <x-stat-card label="Total Donasi Verified" :value="'Rp '.number_format($stats['verifiedDonations'], 0, ',', '.')" />
    <x-stat-card label="Donatur Terdaftar" :value="$stats['donors']" />
</section>

<section class="mt-6 grid gap-6 xl:grid-cols-3">
    <div class="card xl:col-span-2">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-xl font-bold text-slate-900">
                    Statistik Donasi Tahun {{ now()->year }}
                </h3>
                <p class="text-sm text-slate-500">
                    Ringkasan donasi terverifikasi per bulan.
                </p>
            </div>
            <span class="badge bg-emerald-100 text-emerald-700">Manual Transfer</span>
        </div>

        <div class="mt-6 flex h-64 items-end gap-3 border-b border-slate-200 pb-4">
            @foreach($monthlyDonations as $item)
                <div class="flex flex-1 flex-col items-center gap-2">
                    <div class="flex h-48 w-full items-end rounded-t-xl bg-slate-100">
                        <div
                            class="w-full rounded-t-xl bg-brand-600"
                            style="height: {{ max(6, ($item['total'] / $maxMonthlyDonation) * 100) }}%"
                        ></div>
                    </div>
                    <span class="text-xs font-semibold text-slate-500">
                        {{ $item['label'] }}
                    </span>
                </div>
            @endforeach
        </div>
    </div>

    <div class="card">
        <h3 class="text-xl font-bold text-slate-900">Antrian Verifikasi</h3>

        <div class="mt-5 space-y-4">
            <a
                href="{{ route('admin.campaigns.index') }}"
                class="flex items-center justify-between rounded-2xl border border-amber-200 bg-amber-50 p-4 hover:bg-amber-100"
            >
                <div>
                    <p class="font-bold text-amber-900">Campaign Pending</p>
                    <p class="text-sm text-amber-700">Butuh approve/reject admin</p>
                </div>
                <span class="text-3xl font-bold text-amber-700">
                    {{ $stats['pendingCampaigns'] }}
                </span>
            </a>

            <a
                href="{{ route('admin.donations.index') }}"
                class="flex items-center justify-between rounded-2xl border border-emerald-200 bg-emerald-50 p-4 hover:bg-emerald-100"
            >
                <div>
                    <p class="font-bold text-emerald-900">Donasi Pending</p>
                    <p class="text-sm text-emerald-700">Cek bukti transfer</p>
                </div>
                <span class="text-3xl font-bold text-emerald-700">
                    {{ $stats['pendingDonations'] }}
                </span>
            </a>

            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                <p class="font-bold text-slate-900">Fundraiser</p>
                <p class="mt-1 text-3xl font-bold text-slate-700">
                    {{ $stats['fundraisers'] }}
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
            <a class="text-sm font-semibold text-brand-700" href="{{ route('admin.campaigns.index') }}">
                Lihat semua
            </a>
        </div>

        <div class="mt-4 space-y-3">
            @forelse($pendingCampaigns as $campaign)
                <div class="rounded-2xl border border-slate-200 p-4">
                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <p class="font-bold text-slate-900">{{ $campaign->title }}</p>
                            <p class="text-sm text-slate-500">
                                {{ $campaign->category->name }} · {{ $campaign->fundraiser->name }}
                            </p>
                        </div>
                        <span class="badge bg-amber-100 text-amber-700">Pending</span>
                    </div>

                    <form
                        class="mt-3 flex flex-col gap-2 md:flex-row"
                        method="post"
                        action="{{ route('admin.campaigns.verify', $campaign) }}"
                    >
                        @csrf
                        @method('patch')

                        <input class="input md:mt-0" name="admin_notes" placeholder="Catatan verifikasi singkat">

                        <button class="btn-primary" name="action" value="approve">
                            Approve
                        </button>
                        <button class="btn-secondary" name="action" value="reject">
                            Reject
                        </button>
                    </form>
                </div>
            @empty
                <p class="rounded-2xl bg-slate-50 p-4 text-slate-500">
                    Tidak ada campaign pending.
                </p>
            @endforelse
        </div>
    </div>

    <div class="card">
        <div class="flex items-center justify-between">
            <h3 class="text-xl font-bold text-slate-900">
                Donasi Menunggu Verifikasi
            </h3>
            <a class="text-sm font-semibold text-brand-700" href="{{ route('admin.donations.index') }}">
                Lihat semua
            </a>
        </div>

        <div class="mt-4 space-y-3">
            @forelse($pendingDonations as $donation)
                <div class="rounded-2xl border border-slate-200 p-4">
                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <p class="font-bold text-slate-900">{{ $donation->donor_name }}</p>
                            <p class="text-sm text-slate-500">{{ $donation->campaign->title }}</p>
                        </div>
                        <span class="font-bold text-brand-700">
                            Rp {{ number_format($donation->amount, 0, ',', '.') }}
                        </span>
                    </div>

                    <div class="mt-3 flex items-center justify-between rounded-xl bg-slate-50 p-3 text-sm">
                        <span>
                            {{ $donation->proof?->bank_name }} · {{ $donation->proof?->account_name }}
                        </span>

                        @if($donation->proof)
                            <a
                                class="font-semibold text-brand-700"
                                href="{{ Storage::url($donation->proof->file_path) }}"
                                target="_blank"
                            >
                                Bukti transfer
                            </a>
                        @endif
                    </div>
                </div>
            @empty
                <p class="rounded-2xl bg-slate-50 p-4 text-slate-500">
                    Tidak ada donasi pending.
                </p>
            @endforelse
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
                @forelse($recentLogs as $log)
                    <tr>
                        <td class="py-3">{{ $log->created_at->format('d M Y H:i') }}</td>
                        <td>{{ $log->admin->name }}</td>
                        <td>
                            <span class="badge bg-slate-100 text-slate-700">
                                {{ $log->action }}
                            </span>
                        </td>
                        <td>{{ $log->notes ?: '-' }}</td>
                        <td>{{ $log->ip_address ?: '-' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="py-4 text-slate-500">
                            Belum ada audit log.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>
@endsection