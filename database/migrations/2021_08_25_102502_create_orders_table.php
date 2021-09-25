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
            $table->foreignId('user_id')->constrained('users')->nullOnDelete();
            $table->integer('order_id')->unsigned()->unique();
            $table->foreignId('service_id')->constrained('services')->nullOnDelete();
            $table->string('link');
            $table->integer('quantity');
            $table->integer('runs')->nullable()??0;
            $table->integer('interval')->nullable()??0;
            $table->string('charge');
            $table->string('currency')->default('USD');
            $table->string('my_charge');
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
