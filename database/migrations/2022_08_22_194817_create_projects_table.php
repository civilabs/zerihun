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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('project_type_id')->constrained();
            $table->foreignId('project_status_id')->constrained();
            $table->string('name');
            $table->string('location');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('elevation')->nullable();
            $table->string('client');
            $table->string('consultant');
            $table->string('contract_amount');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('projects');
    }
};
