<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      // \App\Models\User::factory(10)->create();
      // Listing::factory(6)->create();

    $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);
    //    Listing::create([

            // 'title'=>'Full-StackEngineer',
            // 'tags'=>'laravel,backend,api',
            // 'company'=>'Stark Industries',
            // 'location'=>'NewYork,NY',
            // 'email'=>'email2@email.com',
            // 'website'=>'http:www.com',
            // 'description'=>'desc desc'

        // ]);
        // 
        // Listing::create([
            // 'title'=>'Full-StackEngineer2',
            // 'tags'=>'laravel,backend,api2',
            // 'company'=>'Stark Industries2',
            // 'location'=>'NewYork,NY2',
            // 'email'=>'email2222@email.com',
            // 'website'=>'http:www.com.com',
            // 'description'=>'desc3 desc3'
        // ]);
    }
}
