<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeSchoolSessionToSchoolSessionIdTostudentClassStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student_class_students', function (Blueprint $table) {
            $table->renameColumn('school_session', 'school_session_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_class_students', function (Blueprint $table) {
            $table->renameColumn('school_session_id', 'school_session');
        });
    }
}
