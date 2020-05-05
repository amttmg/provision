<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->integer('period_id');
            $table->string('BranchCode');
            $table->string('ac_type_id');
            $table->string('MainCode');
            $table->string('FirmName');
            $table->string('Pro_Name');
            $table->string('ClientCode');
            $table->decimal('Limit', 15, 2);
            $table->decimal('Balance', 15, 2);
            $table->decimal('PenalInt');
            $table->decimal('IntOnInt');
            $table->decimal('NormalInt');
            $table->decimal('IntOs');
            $table->string('Class');
            $table->string('assigned_class');
            $table->string('Status');
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
        Schema::dropIfExists('loans');
    }
}
