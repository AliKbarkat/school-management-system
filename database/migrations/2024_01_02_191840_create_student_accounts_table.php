<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_accounts', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('tybe');
            
            $table->foreignId('fee_invoice_id')->references('id')->on('fee_invoices')->onDelete('cascade');
            $table->foreignId('receipt_id')->references('id')->on('receipt_students')->onDelete('cascade');
            $table->foreignId('payment_id')->references('id')->on('payment_students')->onDelete('cascade');
           
            $table->foreignId('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreignId('processing_id')->references('id')->on('processing_fees')->onDelete('cascade');
            $table->decimal('debit',8,2)->nullable();
            $table->decimal('credit',8,2)->nullable();
            $table->string('descreption')->nullable();
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
        Schema::dropIfExists('student_accounts');
    }
}
