<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id('ticket_id');

            $table->unsignedBigInteger('equipment_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable(); // Ticket creator

            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('status', ['Open','In Progress','Closed'])->default('Open');

            $table->foreign('equipment_id')->references('equipment_id')->on('equipment')->nullOnDelete();
            $table->foreign('user_id')->references('id')->on('users')->nullOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
