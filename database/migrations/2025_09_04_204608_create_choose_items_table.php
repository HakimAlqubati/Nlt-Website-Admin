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
        Schema::create('choose_items', function (Blueprint $table) {
            $table->id();
                      $table->unsignedInteger('sort_order')->default(1); // ترتيب البطاقة
            $table->enum('row', ['top','bottom'])->default('top'); // الصف العلوي/السفلي
            $table->string('section_number')->nullable(); // مثل "03"
            $table->string('title');                      // العنوان
            $table->text('description')->nullable();      // الوصف
            $table->string('icon_path')->nullable();      // مسار الأيقونة (اختياري)
            $table->string('icon_alt')->nullable();       // Alt للأيقونة
            $table->boolean('is_active')->default(true);  // تفعيل/تعطيل
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choose_items');
    }
};
