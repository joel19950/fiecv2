<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('catalogue_id')->index();
            $table->unsignedBigInteger('category_id')->index();
            $table->string('product_name');
            $table->text('product_description');
            $table->integer('product_price');
            $table->string('product_shop');
            $table->string('product_category');
            $table->string('product_city');
            $table->integer('product_status');
            $table->string('product_image')->nullable();

            
            $table->foreign("catalogue_id")->references('id')->on('catalogues')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign("category_id")->references('id')->on('categories')
            ->onDelete('cascade')->onUpdate('cascade');
           
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
