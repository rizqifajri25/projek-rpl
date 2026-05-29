<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class DonationProof extends Model { use HasFactory; protected $fillable=['donation_id','bank_name','account_name','transfer_date','file_path','original_name','mime_type','file_size']; protected function casts(): array { return ['transfer_date'=>'date']; } public function donation(): BelongsTo { return $this->belongsTo(Donation::class); } }
