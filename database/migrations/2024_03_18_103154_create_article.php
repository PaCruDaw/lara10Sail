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
            $table->string('name', 50) ->unique();
            $table->text('description');
            $table->float('sell_price', 7, 2)->unsigned();
            $table->float('shop_price', 7, 2)->unsigned();
            $table->enum('shipping', ['S','N']);
            $table->integer('stock')->unsigned();
            $table->text('observacions')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article');
    }
};
