<?php

namespace Database\Seeders;
use App\Models\User;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
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

        User::factory()->create([
            'name' => 'Admin',
            'surname' => 'Admin',
            'email' => 'admin@gmail.com',
            'age' => '0',
            'sexe' => 'Masculin',
            'password' => '$2y$10$fLPh/ZDV7TK6db0zjrMc..wef/ByKNyjMzyHvwsm7HybLwiRshAUy',
            'role' => 'admin',
        ]);

         User::factory()->create([
            'name' => 'Admin1',
            'surname' => 'Admin1',
            'email' => 'admin1@gmail.com',
            'age' => '0',
            'sexe' => 'Masculin',
            'password' => '$2y$10$fLPh/ZDV7TK6db0zjrMc..wef/ByKNyjMzyHvwsm7HybLwiRshAUy',
            'role' => 'admin',
        ]);


        DB::table("horaire_projections")->insert([
            ["date_pro"=>"2023-06-29","heure_pro"=>"10:2"],
            ["date_pro"=>"2023-06-30","heure_pro"=>"18:5"],
            
        ]);

        
    }
}
