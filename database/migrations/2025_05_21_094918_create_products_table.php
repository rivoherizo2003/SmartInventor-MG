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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Standard auto-incrementing primary key
            $table->string('code')->nullable()->comment('Product code');
            $table->string('bnf_code')->nullable()->comment('BNF (British National Formulary) code or similar');
            $table->string('bnf_name');
            $table->integer('items')->default(0)->comment('Number of items or sub-units');
            $table->string('nic')->nullable()->comment('Net Ingredient Cost or similar identifier/value'); // Assuming string, adjust if numeric
            $table->decimal('act_cost', 10, 2)->default(0.00)->comment('Actual cost of the product, 10 total digits, 2 decimal places');
            $table->integer('quantity')->default(0)->comment('Stock quantity');
            $table->text('discr')->nullable()->comment('Description of the product'); // 'discr' likely means description
            $table->text('notice')->nullable()->comment('Any special notices or additional information');
            $table->dateTime('expiration_date')->nullable()->comment('Expiration date of the product');

            $table->timestamps(); // Adds created_at and updated_at columns
            $table->softDeletes(); // Optional: Adds deleted_at for soft deletes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
