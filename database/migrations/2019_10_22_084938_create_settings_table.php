<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->string('consultant_mobile')->nullable();
            $table->string('consultant_number')->nullable();
            $table->string('telegram')->nullable();
            $table->float('minimum_order_cost')->nullable();
            $table->float('sending_cost')->nullable();
            $table->text('address')->nullable();
            $table->text('app_text')->nullable();
            $table->string('app_title')->nullable();
            $table->string('app_googleplay')->nullable();
            $table->string('app_googleplay_link')->nullable();
            $table->string('app_Bazar')->nullable();
            $table->string('app_Bazar_link')->nullable();
            $table->string('app_sibapp')->nullable();
            $table->string('app_sibapp_link')->nullable();
            $table->string('app_background')->nullable();
            $table->string('app_first_image')->nullable();
            $table->string('app_second_image')->nullable();
            $table->string('email')->nullable();
            $table->string('email_info')->nullable();
            $table->string('instagram')->nullable();
            $table->string('account_number')->nullable();
            $table->string('card_number')->nullable();
            $table->string('account_owner')->nullable();
            $table->string('logo')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
