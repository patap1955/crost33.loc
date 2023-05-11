<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("title")->unique()->nullable();
            $table->string("slug")->unique()->nullable();
            $table->text("text")->nullable();
            $table->string("mini_img")->nullable();
            $table->boolean("status_view")->default(true);
            $table->bigInteger("category_id")->nullable();
            $table->bigInteger("user_id")->nullable();
            $table->bigInteger("page_id")->nullable();
            $table->bigInteger("count_views")->default(0);
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
};
