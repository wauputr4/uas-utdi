<?php namespace ppipm\pci\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePpipmPciLaporViolance extends Migration
{
    public function up()
    {
        Schema::create('ppipm_pci_lapor_violance', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('lapor_id');
            $table->integer('violance_type_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ppipm_pci_lapor_violance');
    }
}
