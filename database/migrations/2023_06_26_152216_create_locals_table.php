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
        Schema::create('locals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namelocal');
            $table->string('ubicacion');
            $table->string('namelegal');
            $table->string('apellidoslegal');
            $table->string('telefono');
            $table->string('estado');
            $table->string('subcategoria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locals');
    }
};
