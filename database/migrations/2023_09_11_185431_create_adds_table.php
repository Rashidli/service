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
        Schema::create('adds', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->string('person_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('position')->nullable();
            $table->string('gender')->nullable();
            $table->string('country')->nullable();
            $table->string('experience')->nullable();
            $table->text('education')->nullable();
            $table->text('candidate_requirements')->nullable();
            $table->text('about_vacancy')->nullable();
            $table->text('about_education')->nullable();
            $table->text('language_knowledge')->nullable();
            $table->text('details')->nullable();
            $table->string('product_name')->nullable();
            $table->string('product_price')->nullable();
            $table->string('product_address')->nullable();
            $table->string('product_image')->nullable();
            $table->string('delivery')->nullable();

            $table->boolean('is_active')->default(true);
            $table->string('status')->default('pending'); // approval cancelled
            $table->tinyInteger('add_type');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adds');
    }
};
