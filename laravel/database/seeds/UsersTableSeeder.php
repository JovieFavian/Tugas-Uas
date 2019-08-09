<?php

use App\Login;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,3) as $index) {
	        Login::create([
                'username' => 'Admin'.$faker->unique()->randomDigitNotNull,
                'password' =>  Hash::make('admin123'),
	        ]);
        }
    }
}
