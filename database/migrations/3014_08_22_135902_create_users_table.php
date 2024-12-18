<?php

use App\Models\Quartier;
use App\Models\Service;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("postnom");
            $table->string("prenom");
            $table->enum("sexe",["Masculin","Feminin"]);
            $table->string("adresse");
            $table->string("email")->unique();
            $table->string("phone")->nullable();
            $table->string("password");
            $table->string("photo")->nullable();
            $table->enum("type",["Agent","Admin","User"]);
            $table->enum("status",[1,0])->default(1);
            $table->float("user_lat")->nullable();
            $table->float("user_long")->nullable();
            $table->foreignIdFor(Service::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate()->default(5);
            // $table->foreignIdFor(Quartier::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamp('email_verified_at')->nullable();   
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
