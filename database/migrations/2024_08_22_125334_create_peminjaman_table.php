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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id('peminjaman_id');
            $table->string('amantha')->nullable();
            $table->string('user_id', 16);
            $table->date('peminjaman_pinjam')->nullable();
            $table->date('peminjaman_vent')->nullable();
            $table->boolean('peminjaman_status')->default(false);
            $table->string('pemajaman_nite', 100)->nullable();
            $table->integer('peminjaman_denda')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
