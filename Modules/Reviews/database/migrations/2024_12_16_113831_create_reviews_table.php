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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->morphs('reviewable');  //reviewable_type(model => class) , reviewable_id (model_id)
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->enum('rating' , [1,2,3,4,5])->default(1);
            $table->text('comment')->nullable();
            $table->enum('status' , ['published' , 'pending' , 'rejected'])->default('published');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
