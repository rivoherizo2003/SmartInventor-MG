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
        Schema::create('movements', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique()->comment('Unique identifier for the movement record');
            $table->string('movement_type')->comment('Type of movement (e.g., "in", "out", "transfer")');
            $table->dateTime('movement_date')->comment('Date of the movement');
            $table->text('description')->nullable()->comment('Optional description of the movement');
            $table->timestamps();
            $table->softDeletes(); // Optional: Adds deleted_at for soft deletes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movements');
    }
};
