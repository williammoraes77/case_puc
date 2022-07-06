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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('school_id');
            $table->foreign('school_id')->references('id')->on('schools');
            $table->timestamps();
        });


        $courses = array(
            array('name' => 'Arquitetura E Urbanismo','school_id' => 1, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Comunicação Social - Publicidade E Propaganda','school_id' => 1, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Design','school_id' => 1, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Design De Moda','school_id' => 1, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Design De Produto','school_id' => 1, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Design Digital','school_id' => 1, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Design Gráfico','school_id' => 1, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Jornalismo','school_id' => 1, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Música','school_id' => 1, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Música - Produção Musical','school_id' => 1, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Relações Públicas','school_id' => 1, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Teatro','school_id' => 1, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Agronomia','school_id' => 2, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Interdisciplinar Em Saúde','school_id' => 2, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Educação Física','school_id' => 2, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Biotecnologia','school_id' => 2, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Ciências Biológicas','school_id' => 2, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Enfermagem','school_id' => 2, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Farmácia','school_id' => 2, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Fisioterapia','school_id' => 2, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Gastronomia','school_id' => 2, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Medicina Veterinária','school_id' => 2, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Nutrição','school_id' => 2, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Odontologia','school_id' => 2, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Psicologia','school_id' => 2, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Direito','school_id' => 3, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Letras - Português E Inglês','school_id' => 4, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Ciências Sociais','school_id' => 4, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Filosofia','school_id' => 4, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Física','school_id' => 4, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'História','school_id' => 4, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Matemática','school_id' => 4, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Pedagogia','school_id' => 4, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Química','school_id' => 4, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Serviço Social','school_id' => 4, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Teologia','school_id' => 4, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Medicina','school_id' => 5, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Administração','school_id' => 6, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Ciências Contábeis','school_id' => 6, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Ciências Econômicas','school_id' => 6, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Interdisciplinar Em Ciências E Humanidades - Bi/Li','school_id' => 6, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Marketing','school_id' => 6, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Turismo','school_id' => 6, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Ciência Da Computação','school_id' => 7, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Engenharia Mecânica','school_id' => 7, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Sistema De Informação','school_id' => 7, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Cibersegurança','school_id' => 7, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Engenharia Ambiental','school_id' => 7, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Engenharia Biomédica','school_id' => 7, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Engenharia Civil','school_id' => 7, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Engenharia Da Computação','school_id' => 7, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Engenharia De Alimentos','school_id' => 7, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Engenharia De Controle E Automação','school_id' => 7, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Engenharia De Produção','school_id' => 7, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Engenharia De Software','school_id' => 7, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Engenharia Elétrica','school_id' => 7, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Engenharia Eletrônica','school_id' => 7, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Engenharia Mecatrônica','school_id' => 7, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Engenharia Química','school_id' => 7, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Jogos Digitais','school_id' => 7, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
            array('name' => 'Segurança Da Informação','school_id' => 7, 'created_at' => '2022-07-05 19:01:59', 'updated_at' => '2022-07-05 19:01:59'),
        );

        DB::table('courses')->insert( $courses );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
