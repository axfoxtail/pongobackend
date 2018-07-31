<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('private_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->boolean('read_status')->default(false);
            $table->integer('private_message_id')->index();
            $table->foreign('private_message_id')->references('id')->on('private_messages')->onDelete('cascade');
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
        Schema::dropIfExists('private_tags');
    }
}
