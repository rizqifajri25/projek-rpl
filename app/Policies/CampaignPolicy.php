<?php
namespace App\Policies;
use App\Models\Campaign; use App\Models\User;
class CampaignPolicy { public function update(User $user, Campaign $campaign): bool { return $user->isRole('admin') || ($user->isRole('fundraiser') && $campaign->fundraiser_id === $user->id); } public function verify(User $user): bool { return $user->isRole('admin'); } }
