<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->enum("payment_method" ,["Cashe" ,"visa"])->default("Cashe");
            $table->string("shipping_info")->nullable();
            $table->string("promo_code")->nullable();
            $table->enum("status" ,["pendding" ,"accpeted" ,"shipped" ,"done"])->default("pendding");
            $table->foreignId("user_id")->constrained("users");
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
        Schema::dropIfExists('orders');
    }
}
