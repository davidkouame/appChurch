<?php namespace saintmathieu\Paroisse\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSaintmathieuParoisseExperience extends Migration
{
    public function up()
    {
        Schema::rename('saintmathieu_paroisse_', 'saintmathieu_paroisse_experience');
        Schema::table('saintmathieu_paroisse_experience', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::rename('saintmathieu_paroisse_experience', 'saintmathieu_paroisse_');
        Schema::table('saintmathieu_paroisse_', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
