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
        Schema::create('cvs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');

            // CV overview
            $table->string('title')->nullable();
            $table->text('summary')->nullable();

          /*  // Experience
            $table->string('company_name')->nullable();
            $table->string('job_title')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('location')->nullable();
            $table->text('experience_summary')->nullable();
            

            // Qualification
            $table->string('qualification')->nullable();
            $table->string('institution')->nullable();
            $table->date('date_completed')->nullable();
            $table->text('qualification_summary')->nullable();
*/
            // Biography
            $table->text('biography')->nullable();

            // Personal Details
            $table->string('full_name')->nullable();
            $table->string('date_of_birth')->nullable(); // or ->date() if consistent format is required
            $table->string('gender')->nullable();
            $table->string('street_address')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cvs');
    }
};
