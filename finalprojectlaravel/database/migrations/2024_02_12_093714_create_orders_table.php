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
        Schema::create('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');

            $table->id('order_id');
            $table->string('invoice_id', 100);
            $table->enum('order_status', ['pending', 'on_progress', 'paid', 'delivered', 'done', 'cancel']);
            $table->integer('order_total')->default(0);
            $table->foreign('user_id')->references('id')->on('users');
            $table->date('order_date');
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
