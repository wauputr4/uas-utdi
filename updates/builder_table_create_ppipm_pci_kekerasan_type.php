<?php namespace ppipm\pci\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePpipmPciKekerasanType extends Migration
{
    public function up()
    {
        Schema::create('ppipm_pci_kekerasan_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('code', 50)->nullable();
            $table->string('slug', 50)->nullable();
            $table->string('desc')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ppipm_pci_kekerasan_type');
    }
}
