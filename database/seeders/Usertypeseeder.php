<?php

namespace Database\Seeders;
use App\Models\Usertype;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Usertypeseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 600; $i++){
        $types = new Usertype();
        $types->first_name = $faker->name;
        $types->last_name =$faker->name;
        $types->email = $faker->email;
        $types->mobile_number = $faker->phoneNumber;
        $types->save();
     }
     
    }
}
  