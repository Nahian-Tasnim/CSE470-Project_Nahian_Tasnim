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
        Schema::create('case_lists', function (Blueprint $table) {
            $table->id();
            $table->string('Client_Name');
            $table->string('Assigned_Lawyer_ID')->nullable();
            $table->enum('status',['assigned', 'unassigned'])->default('assigned');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_lists');
    }
};