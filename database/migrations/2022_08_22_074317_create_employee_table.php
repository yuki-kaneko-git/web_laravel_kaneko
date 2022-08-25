<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('id') -> nullable(false);
            $table->char('employee_id', 10)->nullable(false)->unique();
            $table->string('family_name', 20)->nullable(false);
            $table->string('first_name', 20)->nullable(false);
            $table->decimal('section_id', 1, 0)->nullable(false);
            $table->string('mail', 256)->nullable(false);
            $table->decimal('gender_id', 1, 0)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
};
