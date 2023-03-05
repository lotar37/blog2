<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeworks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('user_id');
            $table->dateTime('set_for_date');
            $table->string('title');
            $table->mediumText('content');


            $table->index('subject_id', 'hw_subject_idx');
            $table->index('class_id', 'hw_class_idx');
            $table->index('user_id', 'hw_user_idx');
            $table->foreign('subject_id', 'hw_subject_fk')->on('subjects')->references('id');
            $table->foreign('class_id', 'hw_class_fk')->on('classes')->references('id');
            $table->foreign('user_id', 'hw_user_fk')->on('users')->references('id');

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
        Schema::dropIfExists('homework');
    }
}
