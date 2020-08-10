<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('meta_title');
            $table->text('meta_description');
            $table->string('image_name');
            $table->text('contact');
            $table->string('name_title');
            $table->string('email_title');
            $table->string('message_title');
            $table->string('button_left');
            $table->string('button_right');
            $table->text('note');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_us');
    }
}
