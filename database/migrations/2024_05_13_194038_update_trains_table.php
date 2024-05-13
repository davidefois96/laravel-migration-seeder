<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('trains', function (Blueprint $table) {

            $table->boolean('in_orario')->after('numero_carrozze');
            $table->boolean('cancellato')->after('in_orario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {


            $table->dropColumn('in_orario');
            $table->dropColumn('cancellato');

        });
    }
};
