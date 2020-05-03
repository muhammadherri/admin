<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatemsworkflowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msworkflow', function (Blueprint $table) {
            $table->bigIncrements('WFID');
            $table->string('WFCode');
            $table->string('WFName');
            $table->smallInteger('Version');
            $table->smallInteger('Status');
            $table->smallInteger('CreateBy');
            $table->dateTimeTz('DateCreated',0);
            $table->smallInteger('ModifiedBy');
            $table->dateTimeTz('DateModified',0);
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
        Schema::dropIfExists('failed_jobs');
    }
}
