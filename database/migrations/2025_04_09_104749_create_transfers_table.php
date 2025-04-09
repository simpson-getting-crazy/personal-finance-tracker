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
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->uuid();

            $table->foreignId('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreignId('from_account_id')
                ->references('id')
                ->on('accounts')
                ->onDelete('cascade');

            $table->foreignId('to_account_id')
                ->references('id')
                ->on('accounts')
                ->onDelete('cascade');

            $table->double('amount')->default(0);

            $table->decimal('fee', 15, 2)->nullable();

            $table->date('date');

            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfers');
    }
};
