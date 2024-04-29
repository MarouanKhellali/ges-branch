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
        Schema::create('abonnees', function (Blueprint $table) {
            $table->id();
            $table->string('police_abonnee');
            $table->string('nom');
            
            $table->string('telephone');
            $table->string('cne');
            $table->string('adresse');




            

            $table->timestamps();


        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abonnees');
    }
};
