<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('template_id')->index();
            $table->string('name');
            $table->string('default')->nullable();
            $table->boolean('required')->default(false);
            $table->string('description')->nullable();
            $table->string('example')->nullable();
            $table->timestamps();
            $table->unique(['template_id', 'name']);
        });
        table('attributes', '模板属性数据表');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attributes');
    }
}
