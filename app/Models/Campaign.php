<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Campaign extends Model
{
    use HasFactory;
    public const STATUSES = ['draft','pending','active','completed','rejected'];
    protected $fillable = ['category_id','fundraiser_id','title','slug','short_description','story','target_amount','collected_amount','used_amount','thumbnail_path','supporting_document_path','status','admin_notes','verified_by','verified_at','starts_at','ends_at','location'];
    protected function casts(): array { return ['target_amount'=>'decimal:2','collected_amount'=>'decimal:2','used_amount'=>'decimal:2','verified_at'=>'datetime','starts_at'=>'date','ends_at'=>'date']; }
    public function category(): BelongsTo { return $this->belongsTo(CampaignCategory::class,'category_id'); }
    public function fundraiser(): BelongsTo { return $this->belongsTo(User::class,'fundraiser_id'); }
    public function verifier(): BelongsTo { return $this->belongsTo(User::class,'verified_by'); }
    public function updates(): HasMany { return $this->hasMany(CampaignUpdate::class); }
    public function donations(): HasMany { return $this->hasMany(Donation::class); }
    public function transparencyReports(): HasMany { return $this->hasMany(TransparencyReport::class); }
    public function verificationLogs(): MorphMany { return $this->morphMany(VerificationLog::class, 'verifiable'); }
    public function progressPercentage(): float { return min(100, $this->target_amount > 0 ? ((float)$this->collected_amount / (float)$this->target_amount) * 100 : 0); }
}
