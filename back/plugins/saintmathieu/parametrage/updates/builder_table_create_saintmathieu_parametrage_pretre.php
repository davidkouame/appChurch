<?php namespace saintmathieu\Parametrage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSaintmathieuParametragePretre extends Migration
{
    public function up()
    {
        Schema::create('saintmathieu_parametrage_pretre', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('nom', 255);
            $table->string('prenom', 255);
            $table->string('fonction', 255)->nullable();
            $table->string('photo', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('saintmathieu_parametrage_pretre');
    }
}
