<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        

        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->bigInteger("cat_id");
            $table->string("slug");
            $table->string("banner_1");
            $table->string("short_discription");
            $table->string("full_discription");
            $table->string("meta_discription")->nullable();
            $table->string("meta_keywords")->nullable();    
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
        Schema::dropIfExists('blogs');
    }
}
