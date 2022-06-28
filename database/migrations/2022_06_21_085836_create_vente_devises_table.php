<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenteDevisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vente_devises', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('devise_id');
            $table->foreign('devise_id')->references('id')->on('devises')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->double('taux_vente');

            $table->integer('quantite_vente');

            $table->unsignedBigInteger('devise_client_id');
            $table->foreign('devise_client_id')->references('id')->on('devises')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->string('modepaiement');

            $table->unsignedBigInteger('ville_id');
            $table->foreign('ville_id')->references('id')->on('villes')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->double('montant_total_vente');





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
        Schema::dropIfExists('vente_devises');
    }
}
