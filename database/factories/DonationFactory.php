<?php
namespace Database\Factories;
use App\Models\Campaign; use App\Models\User; use Illuminate\Database\Eloquent\Factories\Factory;
class DonationFactory extends Factory { public function definition(): array { return ['campaign_id'=>Campaign::factory(),'donor_id'=>User::factory(),'donor_name'=>fake('id_ID')->name(),'donor_email'=>fake()->safeEmail(),'amount'=>fake()->numberBetween(10000,1000000),'message'=>fake('id_ID')->sentence(),'status'=>'waiting']; } }
