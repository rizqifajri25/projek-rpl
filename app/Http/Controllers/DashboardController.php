<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Donation;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class DashboardController extends Controller
{
    public function __invoke(): View|RedirectResponse
    {
        $user = request()->user();

        // Admin menggunakan dashboard khusus
        if ($user->isRole('admin')) {
            return redirect()->route('dashboard');
        }

        return match ($user->role?->slug) {

            'fundraiser' => view('fundraiser.dashboard', [
                'campaigns' => Campaign::where('fundraiser_id', $user->id)
                    ->withCount('donations')
                    ->latest()
                    ->get(),
            ]),

            default => view('donor.dashboard', [
                'donations' => Donation::with(['campaign', 'certificate'])
                    ->where('donor_id', $user->id)
                    ->latest()
                    ->get(),
            ]),
        };
    }
}