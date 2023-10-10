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
        Schema::create('employees', function (Blueprint $table) {
            $table->id('id');
            $table->string('fullname', 100);
            $table->string('email', 100);
            $table->string('phone', 100);
            $table->string('position', 100);
            $table->integer('age');
            $table->decimal('salary', 10, 2);
            $table->boolean('active')->default(true);
            $table->date('hireDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
