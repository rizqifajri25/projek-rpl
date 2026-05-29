<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; use App\Http\Requests\VerifyCampaignRequest; use App\Models\Campaign; use App\Repositories\CampaignRepository; use App\Services\CampaignService;
class CampaignVerificationController extends Controller { public function __construct(private CampaignRepository $repo, private CampaignService $service) {} public function index() { return view('admin.campaigns.index',['campaigns'=>$this->repo->dashboardList()]); } public function verify(VerifyCampaignRequest $request, Campaign $campaign) { $this->service->verify($campaign,$request->validated(),$request->user()->id,$request->ip(),$request->userAgent()); return back()->with('success','Status campaign diperbarui.'); } }
