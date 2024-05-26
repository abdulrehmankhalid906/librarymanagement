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
        Schema::create('themes', function (Blueprint $table) {
            $table->id();
            $table->string('app_name')->nullable();
            $table->string('app_img')->nullable();
            $table->string('navbar_toggler')->nullable();
            $table->string('logged_toggler')->nullable();
            $table->string('loggin_message')->nullable();
            $table->json('menu_name')->nullable();
            $table->string('theme_front_color')->nullable();
            $table->string('theme_background_color')->nullable();
            $table->string('footer_front_color')->nullable();
            $table->string('footer_background_color')->nullable();
            $table->string('footer_title')->nullable();
            $table->string('footer_year')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('themes');
    }
};
