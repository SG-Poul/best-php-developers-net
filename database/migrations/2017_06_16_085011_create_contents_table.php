<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('url');
            $table->text('body');
            $table->timestamps();
        });

        DB::table('contents')->insert(
            array(
                'title' => 'PHP Development',
                'url' => 'php-development',
                'body' => 'php-development'
            )
        );

        DB::table('contents')->insert(
            array(
                'title' => 'Hire PHP Developers',
                'url' => 'hire-php-developers',
                'body' => 'hire-php-developers'
            )
        );

        DB::table('contents')->insert(
            array(
                'title' => 'Dedicated PHP Team',
                'url' => 'php-team',
                'body' => 'php-team'
            )
        );

        DB::table('contents')->insert(
            array(
                'title' => 'Prices',
                'url' => 'prices',
                'body' => 'prices'
            )
        );

        DB::table('contents')->insert(
            array(
                'title' => 'Clients',
                'url' => 'clients',
                'body' => 'clients'
            )
        );

        DB::table('contents')->insert(
            array(
                'title' => 'Contacts',
                'url' => 'contacts',
                'body' => 'contacts'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
