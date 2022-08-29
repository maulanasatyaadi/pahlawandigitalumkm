<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('title')->nullable();
            $table->text('email')->nullable();
            $table->text('phone')->nullable();
            $table->text('address')->nullable();
            $table->text('website')->nullable();
            $table->text('PIC')->nullable();
            $table->text('startup_criteria')->nullable();
            $table->text('product_title')->nullable();
            $table->text('product_age')->nullable();
            $table->text('active_customer')->nullable();
            $table->text('industry_sector')->nullable();
            $table->text('product_operation_field')->nullable();
            $table->text('other_production_operation_field')->nullable();
            $table->text('proposal')->nullable();
            $table->text('app_link')->nullable();
            $table->text('video_link')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registration');
    }
}
