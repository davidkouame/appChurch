<?php namespace saintmathieu\Paroisse\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSaintmathieuParoisseActivite extends Migration
{
    public function up()
    {
        Schema::table('saintmathieu_paroisse_activite', function($table)
        {
            $table->string('denomination', 255);
        });
    }
    
    public function down()
    {
        Schema::table('saintmathieu_paroisse_activite', function($table)
        {
            $table->dropColumn('denomination');
        });
    }
}
