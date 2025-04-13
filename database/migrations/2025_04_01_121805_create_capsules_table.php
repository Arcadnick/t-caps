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
        Schema::create('capsules', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->enum('type', ['готовая', 'в планах', 'сгенерированная']);
            $table->boolean('is_blocked')->default(false);
            $table->text('content');
            $table->json('automates')->nullable();
            $table->json('expected')->nullable();
            $table->string('image')->nullable();

            // новые поля
            $table->string('landing_url')->nullable(); // ссылка на лендинг
            $table->boolean('use_default_page')->default(true); // использовать типовую страницу
            $table->decimal('default_price', 10, 2)->nullable(); // цена по умолчанию
            $table->json('default_integrations')->nullable(); // список интеграций

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capsules');
    }
};
