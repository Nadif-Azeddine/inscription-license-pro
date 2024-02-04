<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AnneeUnivSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AnneeUnivSeeder::class);
        $this->call(SpecialiteSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(VilleRegionSeeder::class);
        $this->call(EtablissementSeeder::class);
        $this->call(BacOptionSeeder::class);
        $this->call(SpecialiteSeeder::class);
        $this->call(DiplomeSeeder::class);
        $this->call(DepartementSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(LicenceSeeder::class);
        $this->call(PermissionRoleSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
