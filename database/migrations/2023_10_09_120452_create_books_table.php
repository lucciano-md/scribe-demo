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
        Schema::create('books', static function (Blueprint $table): void {
                $table->id();

                $table->string('title');
                $table->string('subtitle')->nullable();
                $table->text('description');
                $table->string('language');

                $table->unsignedBigInteger('pages');

                $table->json('authors');
                $table->json('categories');
                $table->json('images');
                $table->json('isbn');

                $table->date('published_at');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
