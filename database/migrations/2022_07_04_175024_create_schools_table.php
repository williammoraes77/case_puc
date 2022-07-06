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
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });


        $schools = array(
            array('name' => 'BELAS_ARTES'),
            array('name' => 'CIÊNCIAS_DA_VIDA'),
            array('name' => 'DIREITO'),
            array('name' => 'EDUCAÇÃO_E_HUMANIDADES'),
            array('name' => 'MEDICINA'),
            array('name' => 'NEGÓCIOS'),
            array('name' => 'POLITÉCNICA'),
        );

        DB::table('schools')->insert( $schools );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
};
