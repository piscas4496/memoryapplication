<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passagers', function (Blueprint $table) {
            $table->id();
            $table->string('nomspass');
            $table->string('genrepass');
            $table->date('datenaisspass');
            $table->string('telephone');
            $table->string('emailpass');
            $table->foreignId('ref_adresse')->constrained();
            $table->foreignId('ref_vol')->constrained();
            $table->timestamps();
            $table->softDeletes();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passagers');
    }
};
