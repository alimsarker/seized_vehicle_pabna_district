<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('usertype')->nullable()->comment('Policestation,Traffic,Admin');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('mobile')->nullable();
            $table->string('address')->nullable();
            $table->string('vehi_descript')->nullable();
            $table->string('cs_or_gd_no')->nullable();
            $table->date('gd_date')->nullable();
            $table->string('fname')->nullable();
            $table->string('vehicle_no')->nullable();
            $table->string('chesis_no')->nullable();
            $table->string('engine_no')->nullable();
            $table->string('seized_officer')->nullable();
            $table->string('seized_unite')->nullable();
            $table->string('store_unite')->nullable();
            $table->string('color')->nullable();
            $table->string('role')->nullable()->comment('admin=head of software,operatore=computer operatore,user=dutyofficer');
            
            // $table->integer('designation_id')->nullable();
            // $table->tinyInteger('status')->default(0)->comment('0=seized,1=release');
            $table->tinyInteger('status')->default(0)->comment('0=seized,1=release');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
}
