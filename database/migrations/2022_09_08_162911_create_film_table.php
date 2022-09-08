<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('hari_tayang');
            $table->string('jam_tayang');
            $table->timestamps();
        });

        // DB::table('film')->insert(['id' => '1', 'judul' => 'Avenger', 'hari_tayang' => 'Senin', 'jam_tayang' => '10:00']);
        // DB::table('film')->insert(['id' => '2', 'judul' => 'Judul 1', 'hari_tayang' => 'Senin', 'jam_tayang' => '10:00']);
        // DB::table('film')->insert(['id' => '3', 'judul' => 'Judul 2', 'hari_tayang' => 'Senin', 'jam_tayang' => '10:00']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film');
    }
};
