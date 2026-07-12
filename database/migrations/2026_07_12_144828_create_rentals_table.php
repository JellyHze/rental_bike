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
    Schema::create('rentals', function (Blueprint $table) {

        $table->id();

        $table->foreignId('user_id')
            ->constrained()
            ->cascadeOnDelete();

        $table->string('rental_code')
            ->unique();

        $table->date('rental_date');

        $table->date('return_date');

        $table->integer('total_days');

        $table->decimal(
            'subtotal',
            10,
            2
        );

        $table->enum('status', [
            'pending',
            'waiting_payment',
            'paid',
            'ongoing',
            'returned',
            'cancelled'
        ])
        ->default('pending');

        $table->timestamps();

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::dropIfExists('rentals');
}
};
