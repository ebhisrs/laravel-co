<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('city');
            $table->string('country');
            $table->string('type');
            $table->string('subject');
            $table->text('address');
            $table->text('Description');
            $table->string('tel');
            $table->string('tradingAccountNumber');
            $table->string('postalCode');
            $table->string('disputedAmount');

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
        Schema::dropIfExists('complaints');
    }
}
