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
        Schema::create('publishes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('book_name');
            $table->string('book_title');
            $table->string('book_summary');
            $table->string('book_author');
            $table->string('thumbnail');
            $table->string('link');
            $table->date('publish_date');
            $table->string('topic');
            $table->string('type');
            $table->string('category_of_publication');
            $table->boolean('is_hidden')->default(0);
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
        Schema::dropIfExists('publishes');
    }
};
