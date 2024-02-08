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
        Schema::create('ltes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('lteordertype');
            $table->string('vendor');
            $table->string('iptype')->nullable();
            $table->string('pnsip')->nullable();
            $table->string('devicetype')->nullable();
            $table->string('deviceid')->nullable();
            $table->string('simid')->nullable();
            $table->string('areacode');
            $table->string('opco');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('customerdiv')->nullable();
            $table->string('mobilenumber')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ltes');
    }
};
