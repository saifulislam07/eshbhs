<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhoneToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('profilepic', 255)->nullable()->after('phone');
            $table->string('facebook', 255)->nullable()->after('phone');
            $table->string('sscyear', 255)->nullable()->after('phone');
            $table->string('bloodgroup', 255)->nullable()->after('phone');
            $table->string('gender', 255)->nullable()->after('phone');
            $table->string('alterphone', 255)->nullable()->after('phone');
            $table->string('occupation', 255)->nullable()->after('phone');
            $table->string('village', 255)->nullable()->after('phone');
            $table->string('mathersname', 255)->nullable()->after('phone');
            $table->string('fathersname', 255)->nullable()->after('phone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}