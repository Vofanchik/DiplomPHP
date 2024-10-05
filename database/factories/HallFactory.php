<?php

namespace Database\Factories;

use App\Models\Hall;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hall>
 */
class HallFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->safeColorName(),
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function (Hall $hall) {
            $hall_id = $hall->id;
            $squareHall = 5;
    
            $rowCounter = 1;
            $seatCounter = 1;
    
            for ($i = 1;$i <= $squareHall*$squareHall ; $i++) {
                DB::table('places')->insert([
                    'hall_id' => $hall_id,
                    'row' => $rowCounter,
                    'seat' => $seatCounter,
                    'is_vip' => false
                ]);
                            
                if ($seatCounter % $squareHall == 0) {
                    $seatCounter = 1;
                    $rowCounter++;
                    continue;
                }
                $seatCounter++;
    
                }
        });
    }
}
