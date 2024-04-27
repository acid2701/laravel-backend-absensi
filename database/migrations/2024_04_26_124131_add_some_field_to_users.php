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
        Schema::table('users', function (Blueprint $table) {
            //posision
            $table->string('posision')->nullable();
            //department
            $table->string('department')->nullable();
           //face_embeding
            $table->string('face_embeding')->nullable();
           //image_url
            $table->string('image_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //posision
            $table->dropColumn('posision');
            //department
            $table->dropColumn('department');
            //face_embeding
            $table->dropColumn('face_embeding');
            //image_url
            $table->dropColumn('image_url');
        });
    }
};
