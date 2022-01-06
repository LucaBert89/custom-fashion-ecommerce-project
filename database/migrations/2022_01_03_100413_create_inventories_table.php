<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("product_id");
            $table->foreign('product_id')->references('id')->on("products")->onDelete("cascade");
            $table->unsignedInteger("size_id");
            $table->foreign('size_id')->references('id')->on("sizes")->onDelete("cascade");
            $table->unsignedInteger("color_id");
            $table->foreign('color_id')->references('id')->on("colors")->onDelete("cascade");
            $table->unsignedInteger("gender_id");
            $table->foreign('gender_id')->references('id')->on("genders")->onDelete("cascade");
            $table->integer("stock");
            $table->integer("price");
            $table->string("sku");
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
        Schema::dropIfExists('inventories');
        Schema::table('inventories', function (Blueprint $table){
            $table->dropForeign("product_id");
            $table->dropForeign("size_id");
            $table->dropForeign("color_id");
            $table->dropForeign("gender_id");
        });
    }
}
