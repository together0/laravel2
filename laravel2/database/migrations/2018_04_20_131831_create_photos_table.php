<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('photos'))
        {
            Schema::create('photos', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('per_id')->comment('所属用户id');
                $table->string('url')->comment('存放地址');
                $table->string('type')->comment('类型');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
}
