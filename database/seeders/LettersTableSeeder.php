<?php

namespace Database\Seeders;

use App\Models\Letter;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class LettersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $newLetter = new Letter();

            $newLetter->name = $faker->firstName();
            $newLetter->lastname = $faker->lastname();
            $newLetter->address = $faker->address();
            $newLetter->city = $faker->city();
            $newLetter->arrive_date = $faker->DateTime();
            $newLetter->gift = $faker->word();
            $newLetter->mail_text = $faker->text(255);
            $newLetter->rating = $faker->numberBetween(1, 5);
            $newLetter->delivered = $faker->boolean();

            // dd($newLetter);
            $newLetter->save();
        }
    }
}
