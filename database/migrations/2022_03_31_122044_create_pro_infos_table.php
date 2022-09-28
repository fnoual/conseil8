<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_infos', function (Blueprint $table) {
            $table->id();
            $table->text('work_place_address')->nullable();
            $table->unsignedInteger('work_place_postal_code')->nullable();
            $table->string('work_place_phone')->unique();
            $table->date('work_start')->nullable();
            $table->date('first_graduation_date');
            $table->date('first_graduation_location');
            $table->date('doctorate_date');
            $table->date('doctorate_location');
            // TODO : questions de 10 a 13 ( voir formulaire )
            $table->boolean('is_retired')->default(false);
            $table->date('retirement_date')->nullable();
            $table->boolean('is_unemployed')->default(false);
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
        Schema::dropIfExists('pro_infos');
    }
}
