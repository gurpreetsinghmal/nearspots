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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name',70);
            $table->string('slug_name',250)->unique();
            $table->string('logo',2048)->nullable();
            $table->string('banner',2048)->nullable();
            $table->string('address',1048)->nullable();
            $table->string('owner',100)->nullable();
            $table->string('short_description',2048)->nullable();
            $table->string('website',1048)->nullable();
            $table->string('facebook',1048)->nullable();
            $table->string('whatsapp',1048)->nullable();
            $table->string('instagram',1048)->nullable();
            $table->string('twitter',1048)->nullable();
            $table->string('linkedin',1048)->nullable();
            $table->double('lat')->nullable();
            $table->double('lng')->nullable();
            
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('restrict');
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('restrict');
             
            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id')->references('id')->on('states')->onDelete('restrict');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('restrict');
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
        Schema::dropIfExists('shops');
    }
};
