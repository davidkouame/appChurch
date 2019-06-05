<?php namespace saintmathieu\Parametrage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSaintmathieuParametrageEglise extends Migration
{
    public function up()
    {
        Schema::create('saintmathieu_parametrage_eglise', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('denomination', 255);
            $table->string('fonction', 255)->nullable();
            $table->date('date_creation')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('saintmathieu_parametrage_eglise');
    }
}
