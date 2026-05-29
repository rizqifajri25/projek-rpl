<?php
namespace App\Http\Controllers;
use App\Models\Campaign; use App\Models\CampaignCategory; use App\Repositories\CampaignRepository; use Illuminate\Http\Request;
class HomeController extends Controller { public function __construct(private CampaignRepository $campaigns) {} public function __invoke(Request $request) { return view('welcome',['campaigns'=>$this->campaigns->publicList($request->only('q','category')),'categories'=>CampaignCategory::orderBy('name')->get(),'stats'=>['campaigns'=>Campaign::where('status','active')->count(),'collected'=>Campaign::sum('collected_amount'),'beneficiaries'=>Campaign::whereIn('status',['active','completed'])->count()]]); } }
