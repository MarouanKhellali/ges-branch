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
        Schema::create('reclamations', function (Blueprint $table) {
            $table->id();
            $table->string('police_rec'); 
            $table->string('tournee'); 
            $table->string('adresse_rec'); 
            $table->string('telephone'); 
            




            $table->string('nature_rec'); 
            $table->date('date_rec');
            $table->date('date_rep');
            
            $table->unsignedBigInteger('branchement_id');
            $table->foreign('branchement_id')->references('id')->on('branchements')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reclamations');
    }
};
