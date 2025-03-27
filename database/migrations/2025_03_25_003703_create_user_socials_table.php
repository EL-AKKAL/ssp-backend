<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\SocialPlatform;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_socials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('platform', SocialPlatform::all());
            $table->string('link', 255);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_socials');
    }
};
