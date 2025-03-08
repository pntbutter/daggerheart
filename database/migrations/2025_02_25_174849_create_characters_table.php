<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('class');
            $table->string('sub_class');
            $table->string('ancestry');
            $table->string('community');
            
            $table->smallInteger('level')->default(1);
            $table->smallInteger('proficiency')->default(1);
            $table->json('experience')->nullable();

            $table->smallInteger('agility')->default(0);
            $table->smallInteger('strength')->default(0);
            $table->smallInteger('finesse')->default(0);
            $table->smallInteger('instinct')->default(0);
            $table->smallInteger('presence')->default(0);
            $table->smallInteger('knowledge')->default(0);

            $table->smallInteger('hope')->default(2);
            $table->smallInteger('hp')->default(0);
            $table->smallInteger('max_hp')->default(6);
            $table->smallInteger('stress')->default(0);
            $table->smallInteger('max_stress')->default(6);
            $table->smallInteger('armor')->default(0);
            $table->smallInteger('max_armor')->default(6);

            $table->string('equipped_armor')->nullable();
            $table->string('equipped_primary')->nullable();
            $table->string('equipped_secondary')->nullable();
            
            $table->smallInteger('handfuls_gold')->default(1);
            $table->smallInteger('bags_gold')->default(0);
            $table->boolean('chest_gold')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
