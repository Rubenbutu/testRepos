<?php

use App\Models\Agent;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('naissances', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("postnom");
            $table->string("prenom");
            $table->enum("sexe",["Masculin","Feminin"]);
            $table->date("date_naissance");


          
            $table->string("nom_pere")->nullable();
            $table->string("postnom_pere")->nullable();
            $table->string("prenom_pere")->nullable();
            $table->string("lieu_naissance_pere")->nullable();
            $table->string("date_naissance_pere")->nullable();
            $table->string("proffesion_pere")->nullable();
            $table->string("nationalite_pere")->nullable();

            // MERE
            $table->string("nom_mere")->nullable();
            $table->string("postnom_mere")->nullable();
            $table->string("prenom_mere")->nullable();
            $table->string("lieu_naissance_mere")->nullable();
            $table->string("date_naissance_mere")->nullable();
            $table->string("proffesion_mere")->nullable();
            $table->string("nationalite_mere")->nullable();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('naissances');
    }
};
