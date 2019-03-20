<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('nombre');
            $table->text('img')->nullable();
            $table->integer('viscosidad');
            $table->integer('presentacion');
            $table->double('precio', 8, 2);
            $table->text('description');
            $table->text('beneficios');
            $table->text('aplicaciones');
            $table->text('uso');
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
        Schema::dropIfExists('products');
    }
}
