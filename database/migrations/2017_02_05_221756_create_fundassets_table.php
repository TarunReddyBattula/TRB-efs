

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundassetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('fundassets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->float('asset_value');
            $table->date('asset_date');
            $table->float('interest');
            $table->integer('customer_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('fundassets', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('fundassets');
    }
}

