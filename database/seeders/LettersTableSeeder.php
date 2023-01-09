<?php

namespace Database\Seeders;

use App\Models\Letter;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LettersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('it_IT');

        for ($i = 0; $i < 20; $i++) {
            $newLetter = new Letter();

            $newLetter->name = $faker->firstName();
            $newLetter->lastname = $faker->lastname();
            $newLetter->address = $faker->streetAddress();
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
