<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\Donation;
use App\Models\User;
use App\Models\VerificationLog;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        $monthlyDonations = Donation::query()
            ->selectRaw('MONTH(created_at) as month, SUM(amount) as total')
            ->where('status', 'verified')
            ->whereYear('created_at', now()->year)
            ->groupByRaw('MONTH(created_at)')
            ->pluck('total', 'month');

        return view('admin.dashboard', [
            'stats' => [
                'campaigns' => Campaign::count(),
                'activeCampaigns' => Campaign::where('status', 'active')->count(),
                'pendingCampaigns' => Campaign::where('status', 'pending')->count(),
                'verifiedDonations' => Donation::where('status', 'verified')->sum('amount'),
                'pendingDonations' => Donation::where('status', 'waiting')->count(),
                'donors' => User::whereHas('role', fn ($query) => $query->where('slug', 'donor'))->count(),
                'fundraisers' => User::whereHas('role', fn ($query) => $query->where('slug', 'fundraiser'))->count(),
            ],
            'pendingCampaigns' => Campaign::with(['category', 'fundraiser'])
                ->where('status', 'pending')
                ->latest()
                ->limit(6)
                ->get(),
            'pendingDonations' => Donation::with(['campaign', 'proof'])
                ->where('status', 'waiting')
                ->latest()
                ->limit(6)
                ->get(),
            'recentLogs' => VerificationLog::with('admin')
                ->latest()
                ->limit(8)
                ->get(),
            'monthlyDonations' => collect(range(1, 12))->map(fn ($month) => [
                'label' => now()->month($month)->translatedFormat('M'),
                'total' => (float) ($monthlyDonations[$month] ?? 0),
            ]),
        ]);
    }
}