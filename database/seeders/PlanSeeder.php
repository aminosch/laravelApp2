<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    public function run(): void
    {
        Plan::truncate(); // Nettoie les anciens plans

        Plan::create([
            'name' => 'Basic',
            'slug' => 'basic',
            'stripe_price_id' => 'price_1R7z7tR2ThrdJtxhA5PGhidq',
            'price' => 5.00,
            'features' => 'Access to basic features',
        ]);

        Plan::create([
            'name' => 'Pro',
            'slug' => 'pro',
            'stripe_price_id' => 'price_1R7z8ZR2ThrdJtxhAYacp9Ti',
            'price' => 10.00,
            'features' => 'Everything in Basic + more',

        ]);

        Plan::create([
            'name' => 'Premium',
            'slug' => 'premium',
            'stripe_price_id' =>  'price_1R7z98R2ThrdJtxhX3UENRCo',
            'price' => 20.00,
            'features' => 'All features unlocked',
        ]);
    }
}
