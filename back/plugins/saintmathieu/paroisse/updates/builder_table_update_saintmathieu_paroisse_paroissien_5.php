<?php namespace saintmathieu\Paroisse\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSaintmathieuParoisseParoissien5 extends Migration
{
    public function up()
    {
        Schema::table('saintmathieu_paroisse_paroissien', function($table)
        {
            $table->integer('ceb_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('saintmathieu_paroisse_paroissien', function($table)
        {
            $table->integer('ceb_id')->nullable(false)->change();
        });
    }
}
