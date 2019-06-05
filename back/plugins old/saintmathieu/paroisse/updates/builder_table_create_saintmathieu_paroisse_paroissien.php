<?php namespace saintmathieu\Paroisse\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSaintmathieuParoisseParoissien extends Migration
{
    public function up()
    {
        Schema::create('saintmathieu_paroisse_paroissien', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('eglise_id');
            $table->integer('ceb_id');
            $table->string('nom', 255);
            $table->string('prenom', 255);
            $table->date('date_naissance');
            $table->string('lieu_naissance', 255);
            $table->string('habitation', 255);
            $table->string('telephone', 10);
            $table->string('email', 255);
            $table->integer('situation_matrimoniale');
            $table->string('sexe', 10);
            $table->integer('profession_id');
            $table->string('lieu_bapteme', 255)->nullable();
            $table->date('annee_bapteme');
            $table->string('lieu_confirmation', 255);
            $table->date('date_confirmation');
            $table->string('nationnalite', 255);
            $table->integer('dernier_diplome_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('saintmathieu_paroisse_paroissien');
    }
}
