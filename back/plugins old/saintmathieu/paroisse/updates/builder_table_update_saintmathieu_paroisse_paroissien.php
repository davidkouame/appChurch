<?php namespace saintmathieu\Paroisse\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSaintmathieuParoisseParoissien extends Migration
{
    public function up()
    {
        Schema::table('saintmathieu_paroisse_paroissien', function($table)
        {
            $table->renameColumn('situation_matrimoniale', 'situation_matrimoniale_id');
        });
    }
    
    public function down()
    {
        Schema::table('saintmathieu_paroisse_paroissien', function($table)
        {
            $table->renameColumn('situation_matrimoniale_id', 'situation_matrimoniale');
        });
    }
}
