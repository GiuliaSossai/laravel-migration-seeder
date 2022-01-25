<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();

            $table->string('destination', 70);
            $table->string('country', 30);
            $table->string('facility_name', 60);
            $table->string('address', 60);
            $table->text('description')->nullable();
            $table->smallInteger('price')->unsigned();
            $table->tinyInteger('days_of_trip')->unsigned();

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
        Schema::dropIfExists('travels');
    }
}
