<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistration2023sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {



        Schema::create('registration2023s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('alterphone')->nullable();
            $table->string('occupation');
            $table->string('fathersname');
            $table->string('mathersname')->nullable();
            $table->string('village');
            $table->string('gender');
            $table->string('sscyear');
            $table->string('frombkash');
            $table->string('tobkash');
            $table->string('transectionId');
            $table->integer('amount');
            $table->integer('total_members');
            $table->enum('status', ['Pending', 'Confirm'])->default('Pending');
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
        Schema::dropIfExists('registration2023s');
    }
}
