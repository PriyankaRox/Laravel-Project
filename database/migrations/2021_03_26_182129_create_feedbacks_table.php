<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cid')->unsigned();
            $table->string('title', 255);
            $table->string('type')->not-null;
            $table->string('description')->not-null;
            $table->String('comment')->not-null;
            $table->string('status')->not-null;
            $table->timestamps();
            $table->foreign('cid')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedbacks');
    }
}
