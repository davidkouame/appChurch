<?php namespace saintmathieu\Paroisse\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSaintmathieuParoisseParoissien2 extends Migration
{
    public function up()
    {
        Schema::table('saintmathieu_paroisse_paroissien', function($table)
        {
            $table->renameColumn('situation_matrimoniale_id', 'situationmatrimoniale_id');
        });
    }
    
    public function down()
    {
        Schema::table('saintmathieu_paroisse_paroissien', function($table)
        {
            $table->renameColumn('situationmatrimoniale_id', 'situation_matrimoniale_id');
        });
    }
}
