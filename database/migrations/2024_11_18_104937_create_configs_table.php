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
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('keyword')->nullable();
            $table->string('property_url')->nullable();
            $table->string('property_type')->nullable();
            $table->string('property_title')->nullable();
            $table->string('property_description')->nullable();
            $table->string('meta_description');
            $table->string('meta_author');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configs');
    }
};
