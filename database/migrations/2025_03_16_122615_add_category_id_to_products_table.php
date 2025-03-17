<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('products', function (Blueprint $table) {
        $table->unsignedBigInteger('category_id')->nullable(); // Add category_id as an unsigned integer
        $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null'); // Optional: foreign key constraint
    });
}

public function down()
{
    Schema::table('products', function (Blueprint $table) {
        $table->dropForeign(['category_id']);
        $table->dropColumn('category_id');
    });
}

};
