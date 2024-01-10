<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntentionsTable extends Migration
{
    public function up()
    {
        Schema::create('intentions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->datetime('start_time');
            $table->datetime('end_time');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
