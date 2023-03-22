<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('ten san pham');
            $table->longText('description')->nullable()->comment('mo ta san pham');
            $table->string('image')->comment('anh san pham');
            $table->float('price')->comment('gia san pham');
            $table->string('manufacturing_company')->comment('cong ty san xuat');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productions');
    }
}
