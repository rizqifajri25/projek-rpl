<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
class Donation extends Model { use HasFactory; public const STATUSES=['waiting','verified','rejected']; protected $fillable=['campaign_id','donor_id','donor_name','donor_email','amount','message','status','verified_by','verified_at','admin_notes','certificate_sent_at']; protected function casts(): array { return ['amount'=>'decimal:2','verified_at'=>'datetime','certificate_sent_at'=>'datetime']; } public function campaign(): BelongsTo { return $this->belongsTo(Campaign::class); } public function donor(): BelongsTo { return $this->belongsTo(User::class,'donor_id'); } public function verifier(): BelongsTo { return $this->belongsTo(User::class,'verified_by'); } public function proof(): HasOne { return $this->hasOne(DonationProof::class); } public function certificate(): HasOne { return $this->hasOne(Certificate::class); } public function verificationLogs(): MorphMany { return $this->morphMany(VerificationLog::class, 'verifiable'); } }
