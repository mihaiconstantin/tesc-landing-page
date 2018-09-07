<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoleTypeToRoleInPeopleSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('people_sections', function (Blueprint $table) {
            $table->enum('role', ['founder', 'employee', 'admin'])->default('employee')->change();
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
            $table->enum('role', ['founder', 'employee'])->default('employee')->change();            
        });
    }
}
