<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobs>
 */
class JobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Full-Stack Developer',
            'company' => 'PT RYANA ASTA JAYA',
            'description' => 'lorem lorem lorem lorem lorem lorem ',
            'type' => 'remote'
        ];
    }
}
