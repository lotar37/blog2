<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnMainpageImageAndMainpageToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string("mainpage_image")->nullable();
            $table->text('mainpage_text')->nullable();
            $table->boolean('mainpage')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            Schema::table('posts', function (Blueprint $table) {
                $table->dropColumn('mainpage_image');
            });
            Schema::table('posts', function (Blueprint $table) {
                $table->dropColumn('mainpage_text');
            });
            Schema::table('posts', function (Blueprint $table) {
                $table->dropColumn('mainpage');
            });

        });
    }
}
