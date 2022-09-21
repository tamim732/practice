<?php

namespace Database\Factories;

use App\Models\booktype;
use App\Models\publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\book>
 */
class bookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'book_type_id'=> booktype::select('id')->get()->random()->id,
            'publisher_id'=> publisher::select('id')->get()->random()->id,
            'title'=> $this->faker->sentence,
            'no_page'=> rand(10,500),
            'publishing_year'=> $this->faker->year

        ];
    }
}
