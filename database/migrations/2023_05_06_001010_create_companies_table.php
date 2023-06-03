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
        Schema::create('companies', function (Blueprint $table) {
            $table->id(); // bigint, unsigned, not null, auto increment
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->comment('Email of the company');
            $table->timestamps(); // created_at, updated_at: timestamp, nullable
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
