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
        Schema::create('lego_sets', function (Blueprint $table) {
            $table->id();
            $table->integer("set_number")->unique();
            $table->string("theme_code");
            $table->integer("sub_theme_id")->nullable();
            $table->decimal("price");
            $table->integer("piece_count");
            $table->integer("minifigure_count");
            $table->integer("year");
            $table->timestamps();
        });

        Schema::create('lego_sets_language', function (Blueprint $table) {
            $table->id();
            $table->integer("set_number");
            $table->string("language");
            $table->string("name");
            $table->longText("description");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lego_set_models');
        Schema::dropIfExists('lego_set_models_language');
    }
};
