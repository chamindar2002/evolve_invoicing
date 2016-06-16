<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('countries', function(Blueprint $table){
            $table->increments('id');
            $table->char('code',4);
            $table->string('name',255);
            $table->timestamps();
        });

        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('web', 255);
            $table->string('address_1', 255);
            $table->string('address_2', 255);
            $table->string('city', 255);
            $table->string('post_code', 20);
            $table->integer('country_id')->unsigned();
            $table->string('phone', 20);
            $table->string('mobile', 20);
            $table->string('fax', 20);
            $table->text('comments');
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('country_id')
                ->references('id')
                ->on('countries');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('countries');
        Schema::drop('customers');
    }
}
