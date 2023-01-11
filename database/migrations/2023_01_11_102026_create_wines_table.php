<?php

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
        Schema::create('wines', function (Blueprint $table) {

            /*
            name
            winary
            rating
            location
            image
            slug
            */

            $table->id();
            $table->string('name', 30);
            $table->string('slug', 40);
            $table->string('winery', 30);
            $table->float('rating', 2,1);
            $table->string('location', 30);
            $table->string('image', 30);

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
        Schema::dropIfExists('wines');
    }
};
