<?php

namespace Database\Factories;

use App\Models\DedicatedServer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class DedicatedServerFactory extends Factory
{
    protected $model = DedicatedServer::class;

    public function definition()
    {
        return [
            'product_id' => DedicatedServer::factory(),
            'type' => $this->faker->word(),
            'price' => $this->faker->randomFloat(null, 0, 999999),
            'processor_line_1' => $this->faker->word(),
            'processor_line_2' => $this->faker->word(),
            'memory' => $this->faker->word(),
            'storage_line_1' => $this->faker->word(),
            'storage_line_2' => $this->faker->word(),
            'data' => $this->faker->word(),
            'benchmark' => $this->faker->word(),
            'benchmark_percentage' => $this->faker->randomFloat(null, 0, 999999),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
