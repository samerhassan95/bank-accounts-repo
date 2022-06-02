<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount');

            $table->unsignedBigInteger('send_acc_id');
            $table->foreign('send_acc_id')->references('id')->on('accounts')->restrictOnDelete();

            $table->unsignedBigInteger('received_acc_id');
            $table->foreign('received_acc_id')->references('id')->on('accounts')->restrictOnDelete();

            $table->unsignedBigInteger('currency_id');
            $table->foreign('currency_id')->references('id')->on('currency')->restrictOnDelete();

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
        Schema::dropIfExists('transactions');
    }
}
