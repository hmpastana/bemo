<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('logo_image');
            $table->string('facebook_icon');
            $table->string('facebook_link');
            $table->string('twitter_icon');
            $table->string('twitter_link');
            $table->boolean('show_noindex')->default(false);
            $table->text('google_analytics')->nullable();
            $table->text('facebook_pixel')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_settings');
    }
}
