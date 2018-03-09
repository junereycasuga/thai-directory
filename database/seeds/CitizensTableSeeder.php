<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitizensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $citizens = [];

        for ($i = 0; $i < 20; $i++) {
            $genders = ['male', 'female'];
            $key = array_rand($genders);
            $gender = $genders[$key];
            $citizens[$i] = [
                'first_name' => $faker->firstName($gender),
                'last_name' => $faker->lastName,
                'birth_date' => $faker->date('Y-m-d'),
                'gender' => $gender,
                'created_at' => new DateTime(),
            ];
        }

        DB::table('citizens')->insert($citizens);
    }
}
