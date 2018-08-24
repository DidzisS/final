<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Raksti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raksti', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo_name');
            $table->string('photo_url');

            $table->string('blog_name');
            $table->text('blog_txt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('raksti');
    }
}
