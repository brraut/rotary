<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('privacy_policy');
            $table->text('footer_contacts');
            $table->text('footer_about');
            $table->string('featured');
            $table->string('fb_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('linkedIn_url')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->string('members_pdf')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
