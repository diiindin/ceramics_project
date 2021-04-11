<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
/*
class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            //
        ];
    }
}
*/
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Model;

class ProductFactory extends Factory {
    protected $model = \App\Models\Product::class;

    public function definition()
    {
        return [
            'name'=>$this->faker->name(50),
            'description'=>$this->faker->text(200)
        ];
    }
}
/*$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->string(50),
        'description' => $faker->text(200)
    ];
});
*/