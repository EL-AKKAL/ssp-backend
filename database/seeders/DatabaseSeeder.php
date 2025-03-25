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
            'function' => 'Web Developer',
            'phone' => '0620304050',
            'location' => 'rue Abou Al Alaa Zahar -ex Vesale, 97 resid. Selma, Grand Casablanca',
            'gender' => 'male',
            'birthdate' => '1995-06-15',
            'bio' => 'Hi! I’m a web developer and I love all things tech. When I’m not knee-deep in code, I’m probably reading up on the latest development trends or practicing my sketching (or both). I got my start in technology as a self-taught coder, and since then I’ve never looked back. I specialize in front-end development, but I have a little bit of experience with everything from coding to QA to project management.',
            'description' => 'A passionate web developer specializing in Laravel and Vue.js.',
            'profile_picture' => "https://xsgames.co/randomusers/avatar.php?g=male",
            'role' => "user",
        ]);
    }
}
