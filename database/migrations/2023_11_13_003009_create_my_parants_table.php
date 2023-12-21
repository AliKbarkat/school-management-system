<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyParantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_parants', function (Blueprint $table) {
            $table->id();
            $table->string('Email');
            $table->string('Password');
            //fatherinfomation

            $table->string('Name_Father');
            $table->string('Name_Father_en');
            $table->string('Job_Father');
            $table->string('Job_Father_en');
            $table->string('National_ID_Father');
            $table->string('Passport_ID_Father');
            $table->string('Phone_Father');
            $table->bigInteger('Nationally_father_id')->unsigned();
            $table->bigInteger('Blood_Type_Father_id')->unsigned();
            $table->bigInteger('Religion_Father_id')->unsigned();
            $table->string('Address_Father');
            //Mother infomation
            
            $table->string('Name_Mother');
            $table->string('Name_Mother_en');
            $table->string('Job_Mother');
            $table->string('Job_Mother_en');
            $table->string('National_ID_Mother');
            $table->string('Passport_ID_Mother');
            $table->string('Phone_Mother');
            $table->bigInteger('Nationally_Mother_id')->unsigned();
            $table->bigInteger('Blood_Type_Mother_id')->unsigned();
            $table->bigInteger('Religion_Mother_id')->unsigned();
            $table->string('Address_Mother');
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
        Schema::dropIfExists('my_parants');
    }
}
