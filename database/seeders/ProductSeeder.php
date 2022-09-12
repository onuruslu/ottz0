<?php

namespace Database\Seeders;

use App\Models\DedicatedServer;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::factory()
            ->has(
                DedicatedServer::factory()->count(5), 'dedicated_servers'
            )
            ->count(50)
            ->create();
    }
}
