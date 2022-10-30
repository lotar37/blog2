<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsDateTimeReportToPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dateTime('date')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
            $table->string("time")->nullable();
            $table->text("report")->nullable();
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
            $table->dropColumn('date');
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('time');
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('report');
        });
    }
}
