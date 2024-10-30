<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bonuses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('bonus_degree_stage_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('bonus_study_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('bonus_job_title_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('number_bonus')->nullable();
            $table->date('issue_date')->nullable();
            $table->date('date_worth')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Bonuseses');
    }
};
