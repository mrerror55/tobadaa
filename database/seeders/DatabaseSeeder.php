<?php

namespace Database\Seeders;

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
        \App\Models\User::create([
            'first_name' => 'admin',
            'last_name' => 'hamada',
            'email' => 'admin@app.com',
            'password' => bcrypt(123456789),
        ]);
        \App\Models\User::create([
            'first_name' => 'user1',
            'last_name' => 'user 11',
            'email' => 'user@app.com',
            'password' => bcrypt(123456789),
        ]);
    }
}
