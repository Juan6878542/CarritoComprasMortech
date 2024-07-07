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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('idCategory');
            $table->string('code',50);
            $table->string('name',100);
            $table->decimal('sale_price', 9, 2)->nullable()->after('price');
            $table->integer('stock');
            $table->string('description', 256)->nullable();
            $table->boolean('State')->default(1);
            $table->timestamps();

            $table->foreign('idCategory')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
