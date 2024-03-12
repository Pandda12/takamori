<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate([
            'email' => 'primaryAdmin@takamori.by'
        ],[
            'name' => 'takamori_admin',
            'email' => 'primaryAdmin@takamori.by',
            'password' => Hash::make('HxJ$b+QCq8C%zjdr'),
        ]);
    }
}
