<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class aaa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 10 users
        for ($i = 0; $i < 1; $i++) {
            User::factory()->create([
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'password' => bcrypt('password'),
            ]);
        }
    }
}