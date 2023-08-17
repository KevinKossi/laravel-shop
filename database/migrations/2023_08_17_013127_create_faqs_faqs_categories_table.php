<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs_faqs_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('faq_id');
            $table->foreign('faq_id')
                  ->references('id')
                  ->on('faqs')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('faq_category_id');
            $table->foreign('faq_category_id')
                  ->references('id')
                  ->on('faqs_categories')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faqs_faqs_categories');
    }
};
