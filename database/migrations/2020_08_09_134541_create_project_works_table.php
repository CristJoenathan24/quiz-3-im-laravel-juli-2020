<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_works', function (Blueprint $table) {
            $table->bigIncrements('project_work_id');
            $table->unsignedBigInteger('manager_id');
            $table->foreign('manager_id')->references('manager_id')->on('managers');
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('project_id')->on('projects');
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
        Schema::dropIfExists('project_works');
    }
}
