<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        // user pendafatran factory
        User::factory()->create([
            'name' => 'Pendaftaran',
            'email' => 'pendaftaran_satu@pendaftaran.com',
        ]);
        // user perawat factory
        User::factory()->create([
            'name' => 'Perawat',
            'email' => 'perawat_satu@perawat.com',
        ]);
        // user dokter factory
        User::factory()->create([
            'name' => 'Dokter',
            'email' => 'dokter_satu@dokter.com',
        ]);
        // user apoteker factory
        User::factory()->create([
            'name' => 'Apoteker',
            'email' => 'apoteker_satu@apoteker.com',
        ]);
        // user superadmin factory
        User::factory()->create([
            'name' => 'Superadmin',
            'email' => 'superadmin@superadmin.com',
        ]);
        $this->call([
            PasienSeeder::class,
        ]);
    }
}
