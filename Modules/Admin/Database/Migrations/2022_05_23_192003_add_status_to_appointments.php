<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusToAppointments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->enum('status',['wait','accepted','cancel','Done']);
       
        });
    }

   
    public function down()
    {
        Schema::table('appointments', function (Blueprint $table) {
            

        });
    }
}
