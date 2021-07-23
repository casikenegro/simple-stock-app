<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableProductMovement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_movements', function (Blueprint $table) {
            $table->enum("is_valid",["Valido","Invalido"])->default("Valido");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_movements', function (Blueprint $table) {
           $table->dropColumn("is_valid");
        });
    }
}
