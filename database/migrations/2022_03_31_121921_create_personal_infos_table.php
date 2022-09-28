<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('maiden_name');
            $table->string('gender');
            $table->date('birth_date');
            $table->unsignedInteger('birth_wilaya_id');
            $table->string('martial_status');
            $table->string('partner_name')->nullable();
            $table->string('partner_proffession')->nullable();
            $table->string('nationality')->default('Algérien');
            $table->string('nationality_method');
            $table->boolean('military_service_status');
            $table->string('military_service_label')->nullable();
            $table->boolean('is_military')->default(false);
            $table->date('military_enrolement_date')->nullable();
            $table->boolean('civil_service_status');
            $table->date('civil_service_start')->nullable();
            $table->date('civil_service_end')->nullable();
            $table->string('civil_service_location')->nullable();
            $table->unsignedInteger('region_id');
            $table->unsignedInteger('wilaya_id');
            $table->timestamp('inscrit_le')->useCurrent();
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
        Schema::dropIfExists('personal_infos');
    }
}
