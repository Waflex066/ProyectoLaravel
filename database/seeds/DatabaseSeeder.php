<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call([
    		NidtypeSeeder::class,
    		UserSeeder::class,
            CompanySeeder::class,
            AccountSeeder::class,

    	]);   
        // $this->call(UsersTableSeeder::class);
    }

}
