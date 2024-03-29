<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('class_rooms',function (Blueprint $table) {
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');

        });
        Schema::table('sections',function (Blueprint $table) {
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');

        });
        Schema::table('sections',function (Blueprint $table) {
            $table->foreign('classroom_id')->references('id')->on('class_rooms')->onDelete('cascade');

        });
        Schema::table('my_parants', function (Blueprint $table) {
            $table->foreign('nationality_father_id')->references('id')->on('nationalities')->onDelete('cascade');
            $table->foreign('bload_type_father_id')->references('id')->on('bloads')->onDelete('cascade');
            $table->foreign('religion_father_id')->references('id')->on('religions')->onDelete('cascade');
            $table->foreign('nationality_mother_id')->references('id')->on('nationalities')->onDelete('cascade');
            $table->foreign('blood_type_mother_id')->references('id')->on('bloads')->onDelete('cascade');
            $table->foreign('religion_mother_id')->references('id')->on('religions')->onDelete('cascade');
        });
        Schema::table('parant_attchements', function (Blueprint $table) {
            $table->foreign('parant_id')->references('id')->on('my_parants')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('classrooms',function (Blueprint $table) {
            $table->dropForeign('classrooms_grade_id_foreign');

        });
        Schema::table('sections',function (Blueprint $table) {
            $table->dropForeign('sections_grade_id_foreign');
           

        });

    }
}
