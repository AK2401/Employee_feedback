<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblEmployeeRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_employee_regs', function (Blueprint $table) {
            $table->increments('emp_id');
            $table->string("first_name");
            $table->string("last_name");
            $table->string("address")->nullable();
            $table->string("state");
            $table->string("city");
            $table->integer("gender");
            $table->integer("pincode")->nullable();
            $table->integer("mob_no")->unique();
            $table->string("deparment");
            $table->integer("satus")->default(0);
            $table->string("email")->unique();
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
        Schema::dropIfExists('tbl_employee_regs');
    }
}
