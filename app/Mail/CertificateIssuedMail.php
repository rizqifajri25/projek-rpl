<?php
namespace App\Mail;
use App\Models\Certificate; use Illuminate\Bus\Queueable; use Illuminate\Mail\Mailable; use Illuminate\Queue\SerializesModels; use Illuminate\Support\Facades\Storage;
class CertificateIssuedMail extends Mailable { use Queueable, SerializesModels; public function __construct(public Certificate $certificate) {} public function build() { return $this->subject('Sertifikat Donasi Sumsel Peduli')->view('mail.certificate-issued')->attach(Storage::disk('public')->path($this->certificate->pdf_path)); } }
