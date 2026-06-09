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
        Schema::create('laundry_orders', function (Blueprint $table) {
            $table->id();

            $table->foreignId('service_id')
                ->constrained('laundry_services')
                ->onDelete('cascade');

            $table->string('customer_name', 100);
            $table->string('phone', 20);
            $table->decimal('weight_kg', 5, 2);
            $table->decimal('total_price', 10, 2);

            $table->date('received_date');
            $table->date('estimated_done')->nullable();
            $table->date('actual_done')->nullable();
            $table->date('pickup_date')->nullable();

            $table->enum('status', [
                'received',
                'washing',
                'drying',
                'ironing',
                'ready',
                'picked_up'
            ])->default('received');

            $table->text('notes')->nullable();

            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laundry_orders');
    }
};