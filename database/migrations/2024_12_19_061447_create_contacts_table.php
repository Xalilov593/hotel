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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('number_1')->nullable(); // Telefon raqami 1
            $table->string('number_2')->nullable(); // Telefon raqami 2
            $table->string('number_3')->nullable(); // Telefon raqami 3
            $table->string('number_4')->nullable(); // Telefon raqami 4
            $table->string('email_1')->nullable(); // Email 1
            $table->string('email_2')->nullable(); // Email 2
            $table->text('address')->nullable(); // Manzil
            $table->longText('map')->nullable(); // Xarita (URL yoki koordinatalar)
            $table->string('helpline')->nullable(); // Yordam raqami
            $table->string('telegram')->nullable(); // Telegram (URL)
            $table->string('facebook')->nullable(); // Facebook (URL)
            $table->string('youtube')->nullable(); // YouTube (URL)
            $table->string('instagram')->nullable(); // Instagram (URL)
            $table->text('text')->nullable(); // Matn
            $table->string('lang')->default('en'); // Til
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
