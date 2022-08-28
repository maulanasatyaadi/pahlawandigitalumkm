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
            $table->text('title');
            $table->text('email');
            $table->text('phone');
            $table->text('address');
            $table->text('website');
            $table->text('PIC');
            $table->text('startup_criteria');
            $table->text('product_title');
            $table->text('product_age');
            $table->text('active_customer');
            $table->text('industry_sector');
            $table->text('product_operation_field');
            $table->text('other_production_operation_field');
            $table->text('proposal');
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
