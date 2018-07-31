<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupMessageReadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_message_reads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('group_message_id')->index();
            $table->foreign('group_message_id')->references('id')->on('group_messages')->onDelete('cascade');
            $table->integer('reader_id');
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
        Schema::dropIfExists('group_message_reads');
    }
}
