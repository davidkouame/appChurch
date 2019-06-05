<?php namespace saintmathieu\Parametrage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSaintmathieuParametrageProfession extends Migration
{
    public function up()
    {
        Schema::create('saintmathieu_parametrage_profession', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('denomination', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('saintmathieu_parametrage_profession');
    }
}
