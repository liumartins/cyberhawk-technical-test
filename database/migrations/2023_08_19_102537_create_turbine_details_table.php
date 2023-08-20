<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turbine_details', function (Blueprint $table) {
            $table->id();
            $table->boolean('status');
            $table->biginteger('turbine_id')->unsigned();
            $table->biginteger('component_id')->unsigned();
            $table->timestamps();

            $table->foreign('turbine_id')
                ->references('id')
                ->on('turbines');

                $table->foreign('component_id')
                ->references('id')
                ->on('components');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turbine_details');
    }
};
