<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRotaractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rotaracts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description');
            $table->string('facebook_url');
            $table->string('website_url');
            $table->string('featured')->nullable();
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
        Schema::dropIfExists('rotaracts');
    }
}
