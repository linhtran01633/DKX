<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableOrderItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('order_item', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->integer('employee_id');
            $table->integer('product_id')->nullable();
            $table->smallInteger('quantity')->default(0)->nullable();
            $table->decimal('amount', 15, 0)->default(0)->nullable();
            $table->smallInteger('delete_flag')->default(0)->nullable();
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
        //
    }
}
