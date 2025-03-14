<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer(column: 'product_id');
            $table->string(column: 'quentity_received');
            $table->date(column: 'date_received');
            $table->string(column: 'ware_house_location');
            $table->string(column: 'current_stock');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invs');
    }
};
