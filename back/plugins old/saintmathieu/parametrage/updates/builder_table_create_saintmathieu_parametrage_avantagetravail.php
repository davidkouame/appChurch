<?php namespace saintmathieu\Parametrage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSaintmathieuParametrageAvantagetravail extends Migration
{
    public function up()
    {
        Schema::create('saintmathieu_parametrage_avantagetravail', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('libelle', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('saintmathieu_parametrage_avantagetravail');
    }
}
