<?php

use App\Models\category;
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
            $table->id();
            $table->foreignIdFor(category::class)->constrained();
            $table->string('name');
            $table->string('sku')->nullable();
            $table->bigInteger('qte');
            $table->string('availability');
            $table->string('description');
            $table->string('attachement');
            $table->boolean('isVisible');
            $table->boolean('isDiscount');
            $table->float('compared_price',8,2)->nullable();
            $table->bigInteger('percentage')->nullable();
            $table->float('price',8,2);
            $table->timestamps();
            $table->softDeletes();
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
