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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('slug',60);
            $table->string('designation',60);
            $table->string('address');
            $table->string('locality_postal_code',6)->index();
            $table->string('website');
            $table->string('phone',30);

            $table->foreign('locality_postal_code')
                ->references('postal_code')->on('localities')
                ->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
