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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id'); //ilişkisel tablo kurduğumuzda bu şekilde yapıyoruz.
            $table->string('title');
            $table->string('image');
            $table->longtext('content');
            $table->integer('hit')-> default(0); //tıklanma sayısı
            $table->string('slug');
            $table->timestamps();

            $table->foreign('category_id') //bağlayacağımız sütunun ismini yazıyoruz.
            ->references('id')->on('categories');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
