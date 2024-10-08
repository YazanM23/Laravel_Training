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
        Schema::create('Players', function (Blueprint $table) {
            $table->id();
            $table->string('username',45);
            $table->string('FirstName',45);
            $table->string('LastName',45);
            $table->string('Email',45);
            $table->string('Password',45);
            $table->string('Length',45);
            $table->string('Weight',45);
            $table->string( 'Team',45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
