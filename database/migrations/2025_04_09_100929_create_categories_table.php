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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->uuid();

            $table->string('name');

            $table->enum('type', ['assets', 'revenue', 'expenditure', 'liability', 'investment']);

            $table->char('color_code')->nullable();
            $table->char('icon')->nullable();

            $table->timestamps();
        });

        Schema::table('categories', function (Blueprint $table) {
            $table->foreignId('parent_id')
                ->after('icon')
                ->references('id')
                ->on('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
        Schema::dropColumns('categories', 'parent_id');
    }
};
