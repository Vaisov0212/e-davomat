<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('group_student', function (Blueprint $table) {
            $table->bigInteger('student_id')->unsigned();
            $table->bigInteger('group_id')->unsigned();
            $table->foreign('student_id')
            ->references('id')
            ->on('students')
            ->onDelete('cascade');
            $table->foreign('group_id')
            ->references('id')
            ->on('groups')
            ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_student');
    }
};
