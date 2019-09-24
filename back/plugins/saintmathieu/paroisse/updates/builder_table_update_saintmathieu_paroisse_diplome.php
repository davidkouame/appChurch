<?php namespace saintmathieu\Paroisse\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSaintmathieuParoisseDiplome extends Migration
{
    public function up()
    {
        Schema::table('saintmathieu_paroisse_diplome', function($table)
        {
            $table->integer('paroissien_id');
        });
    }
    
    public function down()
    {
        Schema::table('saintmathieu_paroisse_diplome', function($table)
        {
            $table->dropColumn('paroissien_id');
        });
    }
}
