<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('login_verifications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('otp');
            $table->boolean('is_verified')->default(0);
            $table->foreignIdFor(
                \App\Models\UserInfo::class,
                'user_infos_id'
            )->constrained('user_infos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('login_verifications');
    }
};
