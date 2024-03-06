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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->timestamp('date');
            $table->string('location');
            $table->string('image');
            $table->integer('places_available');
            $table->integer('tickets_booked')->default(0);
            $table->decimal('price', 8, 2);
            $table->enum('status', ['Pending', 'Accepted', 'Rejected'])->default('Pending');
            $table->enum('type_reservation', ['manual', 'automatic'])->default('manual');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};