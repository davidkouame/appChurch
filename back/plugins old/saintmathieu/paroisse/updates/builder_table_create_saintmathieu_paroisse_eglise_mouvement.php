<?php namespace saintmathieu\Paroisse\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSaintmathieuParoisseEgliseMouvement extends Migration
{
    public function up()
    {
        Schema::create('saintmathieu_paroisse_eglise_mouvement', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('mouvement_id');
            $table->integer('eglise_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('saintmathieu_paroisse_eglise_mouvement');
    }
}
