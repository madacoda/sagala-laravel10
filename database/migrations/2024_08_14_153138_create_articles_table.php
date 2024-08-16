<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->text('author');
            $table->text('title');
            $table->text('body');
            $table->timestamps();
        });

        DB::statement('ALTER TABLE articles ADD INDEX articles_author_index (author(64));');
        DB::statement('ALTER TABLE articles ADD INDEX articles_title_index (title(256));');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
