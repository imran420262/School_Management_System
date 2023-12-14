<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_notices', function (Blueprint $table) {
            $table->id();
            $table->string('notice_name');
            $table->date('notice_date');
            $table->string('notice_description');
            $table->integer('created_by_user_id');
            $table->integer('updated_by_user_id')->nullable();
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
        Schema::dropIfExists('school_notices');
    }
}
