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
        Schema::create('top_sections', function (Blueprint $table) {
            $table->id();
              $table->string('title_desktop');       // Enterprise Solutions, Simplified
        $table->string('title_mobile');        // Enterprise Solutions, Simplified & Customer Success
        $table->text('description');           // Insights and strategies ...
        $table->string('btn_primary_label');   // Discover Our Solutions
        $table->string('btn_primary_link');    // #features
        $table->string('btn_secondary_label'); // About NLT
        $table->string('btn_secondary_link');  // #about
        $table->string('image_1')->nullable();
        $table->string('image_2')->nullable();
        $table->string('image_3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('top_sections');
    }
};
