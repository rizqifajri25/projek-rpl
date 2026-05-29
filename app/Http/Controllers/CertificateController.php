<?php
namespace App\Http\Controllers;
use App\Models\Certificate; use App\Services\CertificateService; use Illuminate\Support\Facades\Storage;
class CertificateController extends Controller { public function download(Certificate $certificate) { abort_unless($certificate->donation->donor_id === request()->user()->id || request()->user()->isRole('admin'),403); return Storage::disk('public')->download($certificate->pdf_path); } public function email(Certificate $certificate, CertificateService $service) { abort_unless(request()->user()->isRole('admin'),403); $service->email($certificate); return back()->with('success','Sertifikat dikirim melalui email.'); } }
