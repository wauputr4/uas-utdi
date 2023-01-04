<?php namespace ppipm\pci\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePpipmPciLapor2 extends Migration
{
    public function up()
    {
        Schema::table('ppipm_pci_lapor', function($table)
        {
            $table->renameColumn('violance_id', 'violance_type_id');
        });
    }
    
    public function down()
    {
        Schema::table('ppipm_pci_lapor', function($table)
        {
            $table->renameColumn('violance_type_id', 'violance_id');
        });
    }
}
