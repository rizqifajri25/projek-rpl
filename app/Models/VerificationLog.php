<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
class VerificationLog extends Model { use HasFactory; protected $fillable=['verifiable_type','verifiable_id','admin_id','action','notes','metadata','ip_address','user_agent']; protected function casts(): array { return ['metadata'=>'array']; } public function verifiable(): MorphTo { return $this->morphTo(); } public function admin(): BelongsTo { return $this->belongsTo(User::class,'admin_id'); } }
