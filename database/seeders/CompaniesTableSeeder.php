<?php

namespace Database\Seeders;

use App\models\Companie;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0;$i<=20;$i++){
            Companie::create([
                'name' => $faker->name,
                'nit' => $faker->companySuffix,
                'address' => $faker->address,
                'logo' => $faker->image(),
            ]);
        }
    }
}
