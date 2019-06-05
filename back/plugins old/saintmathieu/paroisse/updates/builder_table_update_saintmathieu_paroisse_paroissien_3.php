<?php namespace saintmathieu\Paroisse\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSaintmathieuParoisseParoissien3 extends Migration
{
    public function up()
    {
        Schema::table('saintmathieu_paroisse_paroissien', function($table)
        {
            $table->integer('situation_matrimoniale_id');
            $table->integer('dernierdiplome_id');
            $table->dropColumn('situationmatrimoniale_id');
            $table->dropColumn('dernier_diplome_id');
        });
    }
    
    public function down()
    {
        Schema::table('saintmathieu_paroisse_paroissien', function($table)
        {
            $table->dropColumn('situation_matrimoniale_id');
            $table->dropColumn('dernierdiplome_id');
            $table->integer('situationmatrimoniale_id');
            $table->integer('dernier_diplome_id');
        });
    }
}
