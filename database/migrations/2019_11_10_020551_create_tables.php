<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('develops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('title')->nullable();
            $table->string('ubication')->nullable();
            $table->text('description')->nullable();
            $table->text('description2')->nullable();
            $table->text('document')->nullable();
            $table->timestamps();
        });
        Schema::create('property_develop', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('develop_id')->unsigned();
            $table->text('description');
            $table->timestamps();
            $table->foreign('develop_id')->references('id')->on('develops')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('gallery_develop', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('develop_id')->unsigned();
            $table->string('name')->nullable();
            $table->text('code')->nullable();
            $table->smallInteger('type')->nullable()->default(1);
            $table->timestamps();
            $table->foreign('develop_id')->references('id')->on('develops')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('home_sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('photo');
            $table->string('thumb');
            $table->string('movil');

            $table->smallInteger('status')->nullable()->default(1);
            $table->timestamps();
           
        });

        Schema::create('ubications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('develop_id')->unsigned();
            $table->string('latitude');
            $table->string('longitude');
            $table->smallInteger('status')->nullable()->default(1);
            $table->timestamps();
            $table->foreign('develop_id')->references('id')->on('develops')
                ->onUpdate('cascade')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('ubications');
        Schema::dropIfExists('home_sliders');
        Schema::dropIfExists('photo_develop');
        Schema::dropIfExists('property_develop');
        Schema::dropIfExists('develops');
    }
}
