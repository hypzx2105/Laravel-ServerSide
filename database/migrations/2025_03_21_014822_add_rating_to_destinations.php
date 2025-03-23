<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRatingToDestinations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('destinations', function (Blueprint $table) {
        $table->decimal('rating', 2, 1)->default(0); // Rating column (Example: 4.5)
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
{
    Schema::table('destinations', function (Blueprint $table) {
        $table->dropColumn('rating');
    });
}

}
