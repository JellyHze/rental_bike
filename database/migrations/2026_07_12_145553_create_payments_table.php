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
    Schema::create('payments', function (Blueprint $table) {

        $table->id();

        $table->foreignId('rental_id')
            ->constrained()
            ->cascadeOnDelete();

        $table->string('payment_method')
            ->nullable();

        $table->decimal(
            'amount',
            10,
            2
        );

        $table->string('proof_image')
            ->nullable();

        $table->enum('status', [
            'pending',
            'verified',
            'rejected'
        ])
        ->default('pending');

        $table->foreignId('verified_by')
            ->nullable()
            ->constrained('users')
            ->nullOnDelete();

        $table->timestamp('paid_at')
            ->nullable();

        $table->timestamps();

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
