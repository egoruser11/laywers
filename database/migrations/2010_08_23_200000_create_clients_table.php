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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('full_name',30);
            $table->string('name',30)->nullable();
            $table->string('surname',30)->nullable();
            $table->string('patronymic',30)->nullable();
            $table->datetime('date_born')->nullable();
            $table->string('document',30)->nullable();
            $table->string('document_number',30)->nullable();
            $table->string('issued_by',30)->nullable();
            $table->string('residential_address',30)->nullable();
            $table->string('registration_address',30)->nullable();
            $table->string('additional_information',30)->nullable();
            $table->string('email',100)->nullable();
            $table->string('phone',30)->nullable();
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
        Schema::dropIfExists('clients');
    }
};
