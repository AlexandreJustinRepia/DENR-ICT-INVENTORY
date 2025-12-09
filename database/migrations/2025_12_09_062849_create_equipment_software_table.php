<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('equipment_software', function (Blueprint $table) {
            $table->id('software_id');

            $table->unsignedBigInteger('equipment_id');

            // Software
            $table->string('os_version')->nullable(); // Windows 10, Win11
            $table->string('office_productivity')->nullable(); // CRACK, Genuine, etc.
            $table->string('ms_office_version')->nullable(); // 365, Enterprise, etc.
            $table->string('office_prod_version')->nullable(); // 2019, 2021, etc.
            $table->string('endpoint_protection')->nullable(); // Windows Firewall, TrendMicro
            $table->text('additional_software')->nullable(); // Chrome, VLC, etc.

            $table->foreign('equipment_id')->references('equipment_id')->on('equipment')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('equipment_software');
    }
};
