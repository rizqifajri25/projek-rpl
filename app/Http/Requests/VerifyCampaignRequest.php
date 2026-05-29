<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class VerifyCampaignRequest extends FormRequest { public function authorize(): bool { return $this->user()?->isRole('admin') === true; } public function rules(): array { return ['action'=>['required','in:approve,reject'],'admin_notes'=>['nullable','string','max:1000'],'verification_document'=>['nullable','file','mimes:pdf,jpg,jpeg,png','max:4096']]; } }
