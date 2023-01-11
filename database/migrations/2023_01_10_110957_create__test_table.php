<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\DatabaseMigrations;


return new class extends Migration
{
    use DatabaseMigrations;

    protected $connection = 'mongodb';
    protected $collection = 'test';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test', function (Blueprint $collection) {
            $collection->index('id');
            $collection->index('name');
            $collection->unique('email');
            $collection->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test');
        // DB::connection('mongodb')->drop(['test']);

    }
};
