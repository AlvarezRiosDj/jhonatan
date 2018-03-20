<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categorie_id')->unsigned();
            $table->string('meta_description',255)->nullable();
            $table->integer('country_id')->unsigned();
            $table->string('meta_keywords',255)->nullable();
            $table->string('name', 128);
            $table->string('slug', 128)->unique();
            $table->string('description_short',50)->nullable();
            $table->string('description_complete',500)->nullable();
            $table->integer('cant_person')->nullable();
            $table->string('characteristics',1000)->nullable();
            $table->string('map',255)->nullable();
            $table->string('status',20)->nullable();
            $table->float('price',8,2)->nullable();
            $table->float('offer',8,2)->nullable();
            $table->date('start_offer')->nullable();
            $table->date('end_offer')->nullable();
            $table->string('cod_offer',10)->nullable();
            $table->timestamps();

            //Relations
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->foreign('country_id')->references('id')->on('countries');


        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
