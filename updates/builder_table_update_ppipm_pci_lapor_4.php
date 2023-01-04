<?php namespace ppipm\pci\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePpipmPciLapor4 extends Migration
{
    public function up()
    {
        Schema::table('ppipm_pci_lapor', function($table)
        {
            $table->dropColumn('violance_type_id');
        });
    }
    
    public function down()
    {
        Schema::table('ppipm_pci_lapor', function($table)
        {
            $table->integer('violance_type_id');
        });
    }
}
