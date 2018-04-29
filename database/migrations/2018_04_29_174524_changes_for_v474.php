<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class ChangesForV474
 */
class ChangesForV474 extends Migration
{
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'import_jobs',
            function (Blueprint $table) {
                $table->string('provider', 50)->after('file_type')->default('');
                $table->string('stage', 50)->after('status')->default('');
                $table->longText('transactions')->after('extended_status');
            }
        );
    }
}
