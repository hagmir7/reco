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
        Schema::whenTableDoesntHaveColumn(shopper_table('categories'), 'show_in_welcome_page', function (Blueprint $table){
            $table->boolean('show_in_welcome_page')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::whenTableHasColumn(shopper_table('categories'), 'show_in_welcome_page', function (Blueprint $table){
            $table->dropColumn('show_in_welcome_page');
        });
    }
};
