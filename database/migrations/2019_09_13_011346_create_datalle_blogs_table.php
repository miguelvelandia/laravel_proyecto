<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatalleBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('content');
            $table->integer('blog_id')->unsigned();                    
            $table->foreign('blog_id')
                  ->references('id')
                  ->on('blogs');
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
        Schema::dropIfExists('detalle_blogs');
    }
}
