<?php

namespace Database\Seeders;

use App\Enums\SocialPlatform;
use App\Models\User;
use App\Models\UserSocial;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSocialsSeeder extends Seeder
{
    public function run(): void
    {
        $platforms = SocialPlatform::all();

        User::all()->each(function ($user) use ($platforms) {
            collect($platforms)
                ->shuffle()
                ->take(rand(1, count($platforms)))
                ->each(fn($platform) => UserSocial::factory()->create([
                    'user_id' => $user->id,
                    'platform' => $platform,
                    'link' => "https://" . $platform . ".com/" . Str::random(10),
                ]));
        });
    }
}
