<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\abonnement;
use App\Models\client;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

         \App\Models\client::factory(10)->create();
         $clients=client::all();
         foreach($clients as $client ){

            abonnement::factory(3)->create(                    [
                        'client_id'=>$client->id
                    ]);
         
         }


    }
}
