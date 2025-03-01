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
        Schema::create('examples', function (Blueprint $table) {
            $table->enum('type',['Persona Natural','Empresa','Proveedor'])->notNullable();
            $table->string('First_Name',50)->notNullable();
            $table->string('Last_Name',50)->notNullable();
            $table->enum('Document_Type',['CC','TI','Pasaporte','Nit'])->Nullable();
            $table->string('Document_Number',20)->Nullable();
            $table->string('Phone',20)->Nullable();
            $table->string('Email',50)->Nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examples');
    }
};
