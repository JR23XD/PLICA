<?php
namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
    public function run() {
        User::create([
            'name' => 'Demo',
            'apes' => ' Mo',
            'email' => 'demo@demo.com',
            'password' => '$2y$10$rLNcdOaI4lM1.R.ZyDKGy.zNmTZBp.H9EFVACWaHCayBy4KZ7nSJq',
        ])->assignRole('desarrollador');
        User::create([
            'name' => 'Demo2',
            'apes' => ' Mo',
            'email' => 'demo2@demo.com',
            'password' => '$2y$10$rLNcdOaI4lM1.R.ZyDKGy.zNmTZBp.H9EFVACWaHCayBy4KZ7nSJq',
        ])->assignRole('admin.usuarios');
        User::create([
            'name' => 'Demo3',
            'apes' => ' Mo',
            'email' => 'demo3@demo.com',
            'password' => '$2y$10$rLNcdOaI4lM1.R.ZyDKGy.zNmTZBp.H9EFVACWaHCayBy4KZ7nSJq',
        ])->assignRole('profesor');
        User::create([
            'name' => 'Demo4',
            'apes' => ' Mo',
            'email' => 'demo4@demo.com',
            'password' => '$2y$10$rLNcdOaI4lM1.R.ZyDKGy.zNmTZBp.H9EFVACWaHCayBy4KZ7nSJq',
        ])->assignRole('alumno');
        User::factory(1000)->create();
    }
}
