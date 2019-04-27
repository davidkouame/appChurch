<?php namespace saintmathieu\Parametrage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSaintmathieuParametrageCeb extends Migration
{
    public function up()
    {
        Schema::create('saintmathieu_parametrage_ceb', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('denomination', 255);
            $table->string('lieu_priere', 255);
            $table->date('date_creation')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('saintmathieu_parametrage_ceb');
    }
}
