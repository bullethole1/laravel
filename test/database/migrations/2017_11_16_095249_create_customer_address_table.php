<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_address', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->integer('customer_id')->nullable();
            $table->integer('customer_address_id')->nullable();
            $table->string('email',255)->nullable();
            $table->string('firstname',50)->nullable();
            $table->string('lastname',50)->nullable();
            $table->string('postcode')->nullable();
            $table->string('street',100)->nullable();
            $table->string('city',100)->nullable();
            $table->string('telephone', 50)->nullable();
            $table->string('country_id', 50)->nullable();
            $table->string('address_type',100)->nullable();
            $table->string('company',100)->nullable();
            $table->string('country',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_address');
    }
}
