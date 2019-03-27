<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_companies', function (Blueprint $table) {
            $table->integer('account_id')->unsigned();
            $table->integer('company_id')->unsigned();
            $table->string('phone')->nullable();
            $table->string('adress')->nullable();
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_companies');
    }
}
