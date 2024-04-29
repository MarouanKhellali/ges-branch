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
        Schema::create('branchements', function (Blueprint $table) {
            $table->id();
            $table->integer('n_order');
            $table->string('n_police');
            $table->string('tournee');
            $table->string('nature');
            $table->string('l_branch');
            $table->string('l_chaussée');
            $table->string('nature_chaussée');
            $table->date('date_ver');
            $table->string('adresse_branch');
            $table->string('n_ver');
            $table->date('date_reg');
            $table->date('date_realisation');
            $table->string('dn_cond');
            $table->string('n_serie');
            $table->string('observation');







            $table->unsignedBigInteger('n_abonnee'); 
            $table->foreign('n_abonnee')->references('id')->on('abonnees')->onDelete('cascade'); 
    
            
    
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branchements');
    }
};
