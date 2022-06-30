<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function __construct()
    {
        \DB::getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('json', 'text');
    }

    public function up()
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->time('from')->change()->default(Carbon\Carbon::now());
            $table->time('to')->change()->default(Carbon\Carbon::now());
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctors', function (Blueprint $table) {
            
        });
    }
}
