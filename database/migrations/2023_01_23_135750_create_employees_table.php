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
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('age');
            $table->string('department');
            $table->unsignedInteger('salary');
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
};

//migration command
//php artisan make:migration create_employees_table
//php artisan make:migration create_cities_table
//php artisan migrate

//php artisan make:migration add_city_to_employees --table=employees
//php artisan migrate

//php artisan migrate:rollback 
