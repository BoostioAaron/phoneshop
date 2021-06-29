<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelefoonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefoons', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('model', 50);
            $table->string('fabrikant', 50);
            $table->integer('geheugen');
            $table->decimal('prijs', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telefoons');
    }
}
