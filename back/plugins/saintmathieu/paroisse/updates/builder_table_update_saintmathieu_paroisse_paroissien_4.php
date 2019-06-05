<?php namespace saintmathieu\Paroisse\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSaintmathieuParoisseParoissien4 extends Migration
{
    public function up()
    {
        Schema::table('saintmathieu_paroisse_paroissien', function($table)
        {
            $table->date('annee_bapteme')->nullable()->change();
            $table->string('lieu_confirmation', 255)->nullable()->change();
            $table->date('date_confirmation')->nullable()->change();
            $table->integer('dernierdiplome_id')->nullable()->change();
            $table->renameColumn('sexe', 'sexe_id');
        });
    }
    
    public function down()
    {
        Schema::table('saintmathieu_paroisse_paroissien', function($table)
        {
            $table->date('annee_bapteme')->nullable(false)->change();
            $table->string('lieu_confirmation', 255)->nullable(false)->change();
            $table->date('date_confirmation')->nullable(false)->change();
            $table->integer('dernierdiplome_id')->nullable(false)->change();
            $table->renameColumn('sexe_id', 'sexe');
        });
    }
}
