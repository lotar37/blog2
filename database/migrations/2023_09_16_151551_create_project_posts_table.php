<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_posts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("post_id");
            $table->unsignedBigInteger("project_id");

            $table->index("post_id","post_project_post_idx");
            $table->index("project_id","post_project_project_idx");

            $table->foreign("post_id","post_project_post_fk")->on("posts")->references("id");
            $table->foreign("project_id","post_project_project_fk")->on("project")->references("id");

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
        Schema::dropIfExists('project_posts');
    }
}
