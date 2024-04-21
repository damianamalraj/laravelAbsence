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
        Schema::create('absences', function (Blueprint $table) {
            $table->id();
            $table->integer('absence_type');
            $table->integer('absence_level')->nullable();
            $table->date('date_from');
            $table->time('time_from')->nullable();
            $table->date('estimated_return_date');
            $table->text('comments')->nullable();
            $table->string('phone_number');
            $table->boolean('priority')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absences');
    }
};
