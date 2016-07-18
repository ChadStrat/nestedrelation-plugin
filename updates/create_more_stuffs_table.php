<?php namespace Radiantweb\NestedRelation\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateMoreStuffsTable extends Migration
{
    public function up()
    {
        Schema::create('radiantweb_nestedrelation_more_stuffs', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name')->nullable();
            $table->integer('stuff_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('radiantweb_nestedrelation_more_stuffs');
    }
}
