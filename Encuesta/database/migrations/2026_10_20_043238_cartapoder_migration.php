<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cartapoder', function (Blueprint $table){
            $table->id();
            $table->foreignId('assigmentId')
            ->constrained('assignments');
            $table->string('route');
            $table->text('content');
            $table->text('qrCode');
            $table->foreignId('userId')->nullable()
                  ->constrained('users');
            $table->date('date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
