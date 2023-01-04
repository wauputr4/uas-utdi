<?php namespace ppipm\pci\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePpipmPciLapor extends Migration
{
    public function up()
    {
        Schema::create('ppipm_pci_lapor', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('violance_id');
            $table->string('reporter');
            $table->string('name');
            $table->integer('gender');
            $table->integer('age');
            $table->string('from')->nullable();
            $table->string('chronology', 144);
            $table->string('effort', 200);
            $table->integer('step_id');
            $table->integer('status_id');
            $table->string('wa');
            $table->string('mail');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ppipm_pci_lapor');
    }
}
