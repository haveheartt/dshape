
<?php
//a maioria das migrations a gente tem um metodo up de criação, down de destruicao!! migration eh o arquivo q a gente escreve e eh transformado em sql
//vantagens: nao se preocupa com sql a principio !!
//eh tudo abstraido a parte de conexao do banco, eh literalmente só muda o nome do bd na .env
//o model eh o espelho do banco
//o controller recebe os dados do banco e joga na view
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
};
