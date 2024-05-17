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
        Schema::create('activiteits', function (Blueprint $table) {
            $table->id();
            $table->date('datum');
            $table->longText('begin');
            $table->longText('einde');
            $table->longText('activiteit');
            $table->longText('locatie');
            $table->longText('groep');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activiteits');
    }
};
