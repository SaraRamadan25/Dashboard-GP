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
        Schema::create('safety_infos', function (Blueprint $table) {
            $table->id();
            $table->double('height');
            $table->double('weight');
            $table->double('heart_rate');
            $table->string('blood_type', 2);
            $table->text('diseases');
            $table->text('allergies');
            $table->foreignId('child_id')->constrained('children');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('safety_infos');
    }
};
