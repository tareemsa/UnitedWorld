<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->longText('desc');
            $table->string('type');
            $table->string('work_time');
            $table->string('paid_per');
            $table->string('city');
            $table->string('area');
            $table->string('military_status');
            $table->string('education_level');
            $table->string('relationship_status');
            $table->string('currency');
            $table->string('category');
            $table->integer('salary');
            $table->integer('experience');
            $table->smallInteger('smoker');
            $table->smallInteger('driver_license');
            $table->softDeletes();
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
        Schema::dropIfExists('jobs');
    }
}
