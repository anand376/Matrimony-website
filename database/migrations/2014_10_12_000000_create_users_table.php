<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('google_id')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->integer('annual_income')->nullable();
            $table->string('occupation')->nullable();
            $table->string('family_type')->nullable();
            $table->string('manglik')->nullable();
            $table->string('expected_income')->nullable();
            $table->string('partnerOccupation')->nullable();
            $table->string('Family')->nullable();
            $table->string('partnerManglik')->nullable();
            $table->enum('role_as', ['user', 'admin'])->default('user');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
