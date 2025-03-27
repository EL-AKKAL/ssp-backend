<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserSocial;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Enums\SocialPlatform;

class UserSocialFactory extends Factory
{
    protected $model = UserSocial::class;

    public function definition(): array
    {
        $platform =  $this->faker->randomElement(SocialPlatform::all());

        return [
            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory(),
            'platform' => $platform,
            'link' => "https://" . $platform . ".com/" . Str::random(10),
        ];
    }
}
