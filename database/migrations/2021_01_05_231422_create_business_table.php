<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained()->onDelete('cascade');
            $table->string('b_name')->nullable();
            $table->string('b_address')->nullable();
            $table->string('b_phone')->nullable();
            $table->string('b_fax')->nullable();
            $table->string('b_aftphone')->nullable();
            $table->string('b_email')->nullable();
            $table->string('b_webadd')->nullable();
            $table->string('b_mailadd')->nullable();
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
        Schema::dropIfExists('business');
    }
}
