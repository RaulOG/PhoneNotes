<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPhoneCallIdToPhoneCallNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('phone_call_notes', function (Blueprint $table) {
            $table->integer('phone_call_id')->unsigned()->index();
            $table->foreign('phone_call_id')->references('id')->on('phone_calls')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('phone_call_notes', function ($table) {
            $table->dropColumn(['phone_call_id']);
        });
    }
}
