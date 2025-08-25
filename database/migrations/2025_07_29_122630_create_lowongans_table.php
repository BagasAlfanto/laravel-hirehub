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
        Schema::create('lowongans', function (Blueprint $table) {
            $table->id();
            $table->string('uid', 64)->unique();
            $table->foreignId('company_profile_id')
                ->constrained('company_profiles')
                ->onDelete('cascade');
            $table->string('job_title');
            $table->text('job_description');
            $table->string('job_location')->nullable();
            $table->enum('job_type', ['full-time', 'part-time', 'contract'])->default('full-time');
            $table->decimal('salary', 10, 2)->nullable();
            $table->date('application_deadline')->nullable();
            $table->enum('status', ['open', 'closed'])->default('open');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lowongans');
    }
};
