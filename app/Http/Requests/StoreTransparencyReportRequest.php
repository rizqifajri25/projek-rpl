<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreTransparencyReportRequest extends FormRequest { public function authorize(): bool { return $this->user()?->isRole('admin') || $this->user()?->isRole('fundraiser'); } public function rules(): array { return ['title'=>['required','string','max:180'],'description'=>['required','string','max:5000'],'amount_used'=>['required','numeric','min:1000'],'usage_date'=>['required','date','before_or_equal:today'],'document'=>['nullable','file','mimes:pdf,jpg,jpeg,png','max:4096'],'photo'=>['nullable','image','mimes:jpg,jpeg,png,webp','max:2048']]; } }
