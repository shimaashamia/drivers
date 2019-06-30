<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateInfoDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('info_drivers', function (Blueprint $table) {
            $table->integer('products_id')->unsigned();
            $table->integer('drivers_id')->unsigned();
          

            $table->foreign('products_id')
            ->references('id')
            ->on('products');
            $table->foreign('drivers_id') ->references('id') ->on('drivers');
          


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('info_drivers', function (Blueprint $table) {
          $table->dropForeign();
          $table->dropForeign('products_id');
          $table->dropForeign('drivers_id');
        });
    }
}
