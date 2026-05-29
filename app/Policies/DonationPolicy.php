<?php
namespace App\Policies;
use App\Models\Donation; use App\Models\User;
class DonationPolicy { public function view(User $user, Donation $donation): bool { return $user->isRole('admin') || $donation->donor_id === $user->id; } public function verify(User $user): bool { return $user->isRole('admin'); } }
