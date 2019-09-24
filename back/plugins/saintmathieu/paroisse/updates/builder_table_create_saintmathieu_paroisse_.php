<?php namespace saintmathieu\Paroisse\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSaintmathieuParoisse extends Migration
{
    public function up()
    {
        Schema::create('saintmathieu_paroisse_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('libelle');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('paroissien_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('saintmathieu_paroisse_');
    }
}
