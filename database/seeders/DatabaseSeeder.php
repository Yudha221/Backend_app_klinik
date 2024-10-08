<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create([
            'name' => 'admin user',
            'email' => 'yudha@klinik.com',
            'role' => 'admin',
            'password' => Hash::make('12345678'),
            'phone' => '1234567890',
        ]);

        //seeder profile_clinics manual
        \App\Models\ProfileClinic::factory()->create([
            'name' => 'Yudha Klinik',
            'address' => 'Jl. Raya Jagakarsa Cilandak No 1',
            'phone' => '1234567890',
            'email' => 'dr.ghilang@klinik.com',
            'doctor_name' => 'Dr. Yudha',
            'unique_code' => '123456',
        ]);

        //call
        $this->call([
            DoctorSeeder::class,
            DoctorScheduleSeeder::class,
            PatientSeeder::class,
        ]);
    }
}
