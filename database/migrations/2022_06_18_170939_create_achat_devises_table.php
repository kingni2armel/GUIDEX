<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchatDevisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achat_devises', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('fournisseur_id');
            $table->foreign('fournisseur_id')->references('id')->on('fournisseurs')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('devise_id');
            $table->foreign('devise_id')->references('id')->on('devises')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->double('somme_achat');

            $table->double('taux_achat');
            $table->integer('quantite_achat');



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
        Schema::dropIfExists('achat_devises');
    }
}
