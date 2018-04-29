<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGenderAndRemoveEmailColumnFromPeopleSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('people_sections', function (Blueprint $table) {
            $table->dropColumn('email');
            $table->enum('gender', ['male', 'female'])->after('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('people_sections', function (Blueprint $table) {
            $table->string('email');
            $table->dropColumn('gender');
        });
    }
}
