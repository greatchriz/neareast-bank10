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
        Schema::create('balances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->float('account_balance', 12, 2)->nullable()->default(0);
            $table->float('loan_balance', 12, 2)->nullable()->default(0);
            $table->float('fixed_deposit_balance', 12, 2)->nullable()->default(0);
            $table->float('total_transfer_funds', 12, 2)->nullable()->default(0);
            $table->float('total_loan_funds', 12, 2)->nullable()->default(0);
            $table->float('total_fixed_deposit_funds', 12, 2)->nullable()->default(0);


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
        Schema::dropIfExists('balances');
    }
};
