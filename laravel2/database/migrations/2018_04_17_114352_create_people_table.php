<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('persons'))
        {
            Schema::create('persons', function (Blueprint $table) {
                $table->increments('id')->comment('自增id');
                $table->string('userName')->comment('用户名');
                $table->string('nickName')->comment('昵称');
                $table->string('password')->comment('密码');
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
        /*删除表*/
        Schema::dropIfExists('persons');
    }
}
