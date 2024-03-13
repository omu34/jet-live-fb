<?php
namespace Database\Factories;
use App\Models\Facebook;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class FacebookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Facebook::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'url' => Str::slug($this->faker->name),
            'category' => $this->faker->name,
            'description' => $this->faker->text,
        ];
    }
}