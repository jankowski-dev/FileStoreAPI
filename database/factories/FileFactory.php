<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'type' => 'jpg',
            'size' => mt_rand(3456, 6789),
            'directory_id' => mt_rand(1, 50),
            'owner_id' => mt_rand(1, 10),
            'storage_path' => '/storage/myfiles/home',
            'download_count' => mt_rand(10, 999),
        ];
    }
}
