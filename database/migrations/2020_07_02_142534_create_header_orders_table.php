<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeaderOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_orders', function (Blueprint $table) {
            $table->id();
            $table->string('id_user');
            $table->string('id_clients');
            $table->string('number_orders');
            $table->string('date');
            $table->string('name');
            $table->string('status');
            $table->string('total_orders');
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
        Schema::dropIfExists('header_orders');
    }
}
