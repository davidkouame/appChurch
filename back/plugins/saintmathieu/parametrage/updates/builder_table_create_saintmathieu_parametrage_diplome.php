<?php namespace saintmathieu\Parametrage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSaintmathieuParametrageDiplome extends Migration
{
    public function up()
    {
        Schema::create('saintmathieu_parametrage_diplome', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('denomination', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('saintmathieu_parametrage_diplome');
    }
}
