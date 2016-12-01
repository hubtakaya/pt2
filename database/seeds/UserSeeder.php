<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->delete();
        // faker
    	$faker = Faker\Factory::create('ja_JP');
    	for($i=0; $i<10; $i++)
    	{
    		$user = User::create();
    			$user->name = $faker->username();
    			$user->email = $faker->unique()->email();
    			$user->password = Hash::make('password');

    			$user->save();
    	}
    }
}
