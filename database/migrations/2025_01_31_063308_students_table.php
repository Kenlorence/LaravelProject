<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('students', function (Blueprint $table) {
        //$table->id();
        $table->bigIncrements('id');  // Or use this if you want to explicitly define the primary key.
        $table->string('first_name');
        $table->string('last_name');
        $table->string('gender');
        $table->string('age');
        $table->string('email')->unique();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
