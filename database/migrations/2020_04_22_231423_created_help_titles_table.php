<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatedHelpTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('help_titles', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('help_topic_id');
            $table->string('help_title');
            $table->text('help_html');
            $table->integer('useful_yes')->default(0);
            $table->integer('useful_no')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('help_titles');
    }
}
