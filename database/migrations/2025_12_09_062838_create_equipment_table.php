<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('equipment', function (Blueprint $table) {
            $table->id('equipment_id');

            // Basic details
            $table->string('type'); // Desktop, Laptop, Printer
            $table->string('brand')->nullable();
            $table->string('model')->nullable();

            // Hardware Specs
            $table->string('processor')->nullable();
            $table->string('ram_size')->nullable();
            $table->string('gpu')->nullable();
            $table->string('range_category')->nullable();

            // Lifecycle
            $table->year('year_acquired')->nullable();
            $table->string('shelf_life')->nullable();
            $table->date('acquired_date')->nullable();
            $table->decimal('cost', 10, 2)->nullable();

            // Identification
            $table->string('serial_number')->nullable();
            $table->string('property_number')->unique()->nullable();
            $table->string('computer_name')->nullable();

            // Barcode
            $table->string('barcode_data')->nullable();

            // Relational (must reference users.id)
            $table->unsignedBigInteger('accountable_person_id')->nullable();
            $table->unsignedBigInteger('actual_user_id')->nullable();

            $table->foreign('accountable_person_id')
                  ->references('id')->on('users')->nullOnDelete();

            $table->foreign('actual_user_id')
                  ->references('id')->on('users')->nullOnDelete();

            // Remarks
            $table->text('remarks')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
