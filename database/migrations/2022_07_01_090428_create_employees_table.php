<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('empname');
            $table->integer('empnumber');
            $table->string('empemail');
            $table->string('empaddress');
            $table->date('empdob');
            $table->string('empqualification');
            $table->string('empkeyskills');
            $table->string('empstatus');
            $table->string('empfhname');
            $table->integer('emphisnumber');
            $table->date('empdoj');
            $table->string('empbranch');
            $table->string('empfield');
            $table->string('empdpt');
            $table->string('empposition');
            $table->string('empsalary');
            $table->time('empin');
            $table->time('empout');
            $table->binary('photo');
            $table->string('remarks');

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
        Schema::dropIfExists('employees');
    }
}
