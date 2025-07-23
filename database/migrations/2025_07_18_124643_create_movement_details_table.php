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
        Schema::create('movement_details', function (Blueprint $table) {
            $table->id();
            $table->foreignkey('movement_id')
                ->references('id')
                ->on('movements')
                ->onDelete('cascade')
                ->comment('Foreign key referencing the movements table');
            $table->foreignkey('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade')
                ->comment('Foreign key referencing the products table');
            $table->decimal('quantity', 10, 2)->comment('Quantity of the product in the movement');
            $table->string('designation_product')->comment('Optional designation for the movement detail');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movement_details');
    }
};
