<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('order', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->integer('customer_id');
            $table->string('phone', 15)->nullable();
            $table->decimal('amount', 15, 0)->nullable();
            $table->string('date', 20)->nullable();
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
