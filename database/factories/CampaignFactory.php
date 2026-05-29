<?php
namespace Database\Factories;
use App\Models\CampaignCategory; use App\Models\User; use Illuminate\Database\Eloquent\Factories\Factory; use Illuminate\Support\Str;
class CampaignFactory extends Factory { public function definition(): array { $title=fake('id_ID')->sentence(4); return ['category_id'=>CampaignCategory::factory(),'fundraiser_id'=>User::factory(),'title'=>$title,'slug'=>Str::slug($title).'-'.Str::random(5),'short_description'=>fake('id_ID')->sentence(12),'story'=>fake('id_ID')->paragraphs(4,true),'target_amount'=>fake()->numberBetween(10000000,100000000),'collected_amount'=>0,'status'=>'pending','location'=>'Sumatera Selatan']; } }
