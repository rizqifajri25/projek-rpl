<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Certificate extends Model { use HasFactory; protected $fillable=['donation_id','certificate_number','pdf_path','issued_at','emailed_at']; protected function casts(): array { return ['issued_at'=>'datetime','emailed_at'=>'datetime']; } public function donation(): BelongsTo { return $this->belongsTo(Donation::class); } }
