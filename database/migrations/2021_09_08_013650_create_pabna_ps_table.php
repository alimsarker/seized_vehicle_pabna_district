<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePabnaPsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pabna_ps', function (Blueprint $table) {
            $table->id();
             $table->string('name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('address')->nullable();
            $table->string('vehi_descript')->nullable();
            $table->string('cs_or_gd_no')->nullable();
            $table->date('date')->nullable();
            $table->string('fname')->nullable();
            $table->string('vehicle_no')->nullable();
            $table->string('chesis_no')->nullable();
            $table->string('engine_no')->nullable();
            $table->string('seized_officer')->nullable();
            $table->string('seized_unite')->nullable();
            $table->string('store_unite')->nullable();
            $table->string('color')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0=seized,1=release');
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
        Schema::dropIfExists('pabna_ps');
    }
}
