<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Log;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Log>
 */
class LogFactory extends Factory
{
    protected $model = Log::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'level' => $this->faker->numberBetween(1,4),
            'date' => $this->faker->dateTime('d/m/Y H:i:s'),
            'source' => 'WindowsUpdateClient',
            'eventID' => $this->faker->numberBetween(1,50),
            'Category' => 'Windows Update Client'
        ];
    }
}
