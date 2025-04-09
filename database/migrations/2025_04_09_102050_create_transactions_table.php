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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->uuid();

            $table->foreignId('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreignId('account_id')
                ->references('id')
                ->on('accounts')
                ->onDelete('cascade');

            $table->foreignId('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');

            $table->foreignId('payee_id')
                ->references('id')
                ->on('payees')
                ->onDelete('cascade');

            $table->double('amount')->default(0);

            $table->enum('type', ['income', 'expense', 'transfer']);

            $table->date('date');

            $table->text('description');
            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
