<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 40)->nullable()->default('cuong')->comment('truong nay dung de nhap ten');
            $table->string('username', 40)->comment('truong nay dung de nhap tai khoan');
            $table->string('password', 40)->comment('truong nay dung de nhap mat khau');

            $table->timestamps();
            $table->softDeletes();
            // $table->renameColumn('from', 'to');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Users');
    }
}
