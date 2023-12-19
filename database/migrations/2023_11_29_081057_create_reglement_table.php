<?php
use App\Models\facture;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reglement', function (Blueprint $table) {
            $table->id();
            $table->date('daterg')->nullable();
            $table->string('statut')->nullable();
            $table->string('moderg')->nullable();

            $table->foreignIdFor(facture::class)
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reglement');
    }
};
