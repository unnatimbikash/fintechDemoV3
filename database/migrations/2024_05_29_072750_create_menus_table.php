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
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('menu_id')->nullable;
            $table->integer('parent_id')->nullable;
            $table->string('parent_slug')->nullable();
            $table->enum('is_parent',[1,0])->default(0);
            $table->string('name');
            $table->string('title');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->integer('menu_order')->nullable();
            $table->text('url'); 
            $table->text('permissions');
            $table->string('icon')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
