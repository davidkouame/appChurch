<?php namespace saintmathieu\Paroisse\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSaintmathieuParoisseActivite extends Migration
{
    public function up()
    {
        Schema::create('saintmathieu_paroisse_activite', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('date_activite');
            $table->string('lieu_activite', 255);
            $table->integer('cout_activite');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('saintmathieu_paroisse_activite');
    }
}
