<?php namespace ppipm\pci\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePpipmPciLaporStatus extends Migration
{
    public function up()
    {
        Schema::create('ppipm_pci_lapor_status', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('lapor_id');
            $table->text('recent_stat');
            $table->integer('peformed_by')->nullable();
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ppipm_pci_lapor_status');
    }
}
