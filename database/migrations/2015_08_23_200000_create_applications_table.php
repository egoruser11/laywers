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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->datetime('start_at')->nullable();
            $table->string('status');
            $table->string('phone')->nullable();
            $table->unsignedBigInteger('topic_id')->nullable();
            $table->unsignedBigInteger('client_id')->nullable();
            $table->unsignedBigInteger('manager_id')->nullable();
            $table->unsignedBigInteger('lawyer_id')->nullable();
            $table->string('government_agency',100)->nullable();
            $table->string('application_type')->nullable();
            $table->date('meeting_date')->nullable();
            $table->datetime('work_start_date_and_time')->nullable();
            $table->integer('count_hours_work')->nullable();
            $table->integer('price')->nullable();
            $table->text('manager_notes')->nullable();
            $table->text('description')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');
            $table->foreign('manager_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('lawyer_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
