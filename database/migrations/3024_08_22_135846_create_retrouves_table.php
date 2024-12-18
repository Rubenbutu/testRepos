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
        Schema::create('retrouves', function (Blueprint $table) {
            $table->id();
            // Informatin sur la personne retrouvée
            $table->string("nom");
            $table->string("postnom");
            $table->string("prenom");
            $table->enum("sexe",["Masculin","Feminin"]);
            $table->integer("age");
            $table->string("piece_identite");
            $table->string("photo");
            $table->string("date");
            $table->string("lieu");
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retrouves');
    }
};
