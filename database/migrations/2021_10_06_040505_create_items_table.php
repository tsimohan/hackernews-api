<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('username');
            $table->char('item_type', 20);
            $table->string('url')->nullable();
            $table->integer('time_stamp');
            $table->integer('score');
            $table->boolean('is_top')->default(0);
            $table->boolean('is_show')->default(0);
            $table->boolean('is_ask')->default(0);
            $table->boolean('is_job')->default(0);
            $table->boolean('is_new')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
