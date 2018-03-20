<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selects', function (Blueprint $table) {
            $table->increments('select_id');
            $table->string('select_name');
            $table->integer('user_id');
            $table->tinyInteger( 'period');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('dep_id');
            $table->integer('pro_id');
            $table->string('person_name');
            $table->date('use_date');
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('selects');
    }
}
