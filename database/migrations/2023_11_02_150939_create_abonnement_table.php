<?php

use App\Models\client;
use App\Models\facture;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonnements', function (Blueprint $table) {
            $table->id();
            $table->string('nomab');

            $table->date('date_debab')->nullable();
            $table->date('date_finab')->nullable();

            $table->foreignIdFor(client::class)
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->timestamps();


            $table->foreignIdFor(facture::class)
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abonnement');
    }
};
