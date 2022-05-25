<?php
//php artisan migrate roda a migration
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
        Schema::create('measurements', function (Blueprint $table) {//criando tabela chamada measurements
            $table->id();//chave primaria primeiro o tipo e dps o nome 
            $table->date('date');//data
            $table->double('weight');//peso
            $table->double('height');//altura
            $table->double('chest');//peito
            $table->double('left_arm');//braço esquerdo
            $table->double('right_arm');//braço direito
            $table->double('abdomen');//abdômen
            $table->double('waist');//cintura
            $table->double('hips');//quadril
            $table->double('left_thigh');//coxa esquerda
            $table->double('right_thigh');//coxa direita
            $table->double('left_calf');//panturrilha esquerda
            $table->double('right_calf');//panturrilha direita
            $table->timestamps();//marca duas coisas, "criado em:" e "atualizado em:" eh um log, um registro.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('measurements');
    }
};
