<?php namespace saintmathieu\Parametrage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSaintmathieuParametrageMouvement extends Migration
{
    public function up()
    {
        Schema::create('saintmathieu_parametrage_mouvement', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('denomination', 255);
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('saintmathieu_parametrage_mouvement');
    }
}
