<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('post_name');
            $table->string('post_title');
            $table->string('post_description');
            //1 for image,2 for audio,3 for video, 0 for default,
            $table->enum('post_type',[0=>'0',1=>'1',2=>'2',3=>'3']);
            $table->enum('status',[0=>'0',1=>'1']);
            //1 for active 0 for inactive
            $table->enum('published',[0=>'0',1=>'1']);
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
        Schema::dropIfExists('posts');
    }
}
