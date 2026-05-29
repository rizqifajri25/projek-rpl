<?php
namespace App\Repositories;
use App\Models\Donation; use Illuminate\Contracts\Pagination\LengthAwarePaginator;
class DonationRepository { public function pending(): LengthAwarePaginator { return Donation::with(['campaign','proof'])->where('status','waiting')->latest()->paginate(15); } public function forDonor(int $userId): LengthAwarePaginator { return Donation::with(['campaign','certificate'])->where('donor_id',$userId)->latest()->paginate(10); } }
