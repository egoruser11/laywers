<?php

namespace Database\Factories;

use App\Models\Application;
use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return string
     */


    private function generateRandomPhoneNumber()
    {
        $areaCode = rand(100, 999); // Код региона
        $centralOfficeCode = rand(100, 999); // Центральный офис
        $lineNumber = rand(1000, 9999); // Номер абонента
        return "8 $areaCode $centralOfficeCode-$lineNumber";

    }



    public function definition()
    {

        $documents = ['Паспорт','Снилс'];


        return [
            'full_name' => fake()->lastName. ' ' . fake()->firstName,
            'name' => null,
            'surname' => null,
            'email' => fake()->email,
            'date_born' => fake()->date(),
            'phone' => $this->generateRandomPhoneNumber(),
            'document' => fake()->randomElement($documents),
            'document_number' => null,
            'issued_by'  => null,
            'residential_address'  => null,
            'registration_address'  => null,
            'additional_information'  => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];


    }



}
