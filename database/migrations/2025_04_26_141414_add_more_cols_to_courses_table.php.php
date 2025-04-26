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
        Schema::table('courses', function (Blueprint $table) {
            $table->string('category')->nullable();
            $table->integer('lessons_count')->nullable();
            $table->decimal('rating', 3, 2)->nullable();
            $table->integer('seats')->nullable();
            $table->decimal('price', 8, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn(['category', 'lessons_count', 'rating', 'seats', 'price']);
        });
    }
};
