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
        Schema::table('certification_courses', function (Blueprint $table) {
            $table->string('apply_url')->nullable(); // URL or path for applying
            $table->string('image')->nullable(); // Image file name
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('certification_courses', function (Blueprint $table) {
            $table->dropColumn(['apply_url', 'image']);

        });
    }
};
