<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class TransparencyReport extends Model { use HasFactory; protected $fillable=['campaign_id','user_id','title','description','amount_used','usage_date','document_path','photo_path']; protected function casts(): array { return ['amount_used'=>'decimal:2','usage_date'=>'date']; } public function campaign(): BelongsTo { return $this->belongsTo(Campaign::class); } public function user(): BelongsTo { return $this->belongsTo(User::class); } }
