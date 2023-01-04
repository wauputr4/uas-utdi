<?php namespace ppipm\pci\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePpipmPciViolanceTypes extends Migration
{
    public function up()
    {
        Schema::rename('ppipm_pci_kekerasan_type', 'ppipm_pci_violance_types');
    }
    
    public function down()
    {
        Schema::rename('ppipm_pci_violance_types', 'ppipm_pci_kekerasan_type');
    }
}
