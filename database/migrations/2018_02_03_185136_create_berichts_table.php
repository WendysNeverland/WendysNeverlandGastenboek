<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBerichtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Berichts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naam');
            $table->string('email');
            $table->string('telefoonnummer')->nullable();
            $table->string('foto')->nullable();
            $table->text('bericht');
            $table->boolean('mailinglist')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berichts');
    }
}
