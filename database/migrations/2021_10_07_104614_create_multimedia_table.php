<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateMultimediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multimedia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cover_image')->nullable();
            $table->string('caption_title');
            $table->string('sub_headline');
            $table->string('media_type')->nullable();
            $table->string('media_file')->nullable();
            $table->string('media_path');
            $table->string('media_external_link_path')->nullable();
            $table->text('background_desc')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('status_id')->default(1);
            $table->integer('price')->nullable();
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
        Schema::dropIfExists('multimedia');
    }
}
