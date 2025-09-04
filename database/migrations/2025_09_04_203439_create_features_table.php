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
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('sort_order')->default(1);         // لترتيب العرض
            $table->string('section_number')->nullable();               // مثل "01" إن رغبت
            $table->string('title');                                    // عنوان الميزة
            $table->text('description')->nullable();                    // وصف مختصر
            $table->string('image_path')->nullable();                   // مسار الصورة داخل public/
            $table->string('image_alt')->nullable();                    // Alt text
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('features');
    }
};
