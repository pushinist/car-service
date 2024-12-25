<?php

use App\Enums\OrderStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('mechanic_id')->nullable();
            $table->date('creation_time')->default(now());
            $table->date('planned_completion_time')->default(now()->addMonth());
            $table->date('real_completion_time')->nullable();
            $table->enum('status', OrderStatus::values())->default(OrderStatus::New->value);
            $table->text('description')->nullable();
            $table->unsignedBigInteger('cost')->default(0);
            $table->string('work_to_do');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
