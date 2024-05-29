<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true) ,
            'original_price' => $this->faker->numberBetween($min = 10000, $max = 100000),
            'new_price' => $this->faker->numberBetween($min = 10000, $max = 100000),
            'brand_id' => $this->faker->numberBetween($min = 1, $max = 5),
            'model_id' => $this->faker->numberBetween($min = 1, $max = 13),
            'year' => $this->faker->year( $max = 'now'),
            'car_color' => $this->faker->numberBetween($min = 1, $max = 4),
            'doors' => $this->faker->numberBetween($min = 1, $max = 6),
            'km' => $this->faker->numberBetween($min = 2000, $max = 20000),
            'car_type_id' => $this->faker->numberBetween($min = 1, $max = 7),
            'm_condition_id' => $this->faker->numberBetween($min = 1, $max = 2),
            'b_condition_id' => $this->faker->numberBetween($min = 1, $max = 2),
            'fuel_type_id' => $this->faker->numberBetween($min = 1, $max = 3),
            'cylinder' => $this->faker->numberBetween($min = 1, $max = 3),
            'seats' => $this->faker->numberBetween($min = 1, $max = 6),
            'front_wheel_id' => $this->faker->numberBetween($min = 1, $max = 2),
            'rear_wheel_id' => $this->faker->numberBetween($min = 1, $max = 2),
            'show_room_id' => $this->faker->numberBetween($min = 1, $max = 5),
            'gcc_import' => 'GCC',
            'status_id' => '2',
            'general_dsc' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'pub_place' => 'best_selling',
            'warranty' => $this->faker->numberBetween($min = 1, $max = 12),
            "security_env"=> "[\"4WD\",\"Parking assist\",\"Rear wheel drive\",\"Traction control\",\"ABS\",\"Adaptive lighting\",\"All wheel drive\",\"LED headlight\",\"Tyre pressure warning system\"]",
            "exterior_design"=> "[\"360 Degree Camera\",\"Blind spot detection camera\",\"Fog Lights\",\"Roof rails\",\"Sport package\",\"Trailer coupling\",\"Air suspension front and rear\",\"Hydraulic door\"]",
            'interior_design' =>"[\"Air Conditioning\",\"Analog Clock\",\"CD Player\",\"Fridge\",\"Heads up display\",\"Hill descent control\",\"Massaging Seats\",\"Mps3 Interface\",\"Panoramic Roof\",\"Parking sensor rear\",\"Power Locks\",\"Sunroof\",\"USB\",\"Alerm\",\"Apple Car play\",\"Blouetooth system\",\"Rear TV Screens\",\"Self steering parking\",\"Turner\\/ Radio\"]",
        ];
    }
}
