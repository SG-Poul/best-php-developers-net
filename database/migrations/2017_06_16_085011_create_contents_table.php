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

        DB::table('contents')->insert(
            array(
                'title' => 'About Us',
                'url' => 'about-us',
                'body' => 'about-us'
            )
        );

        DB::table('contents')->insert(
            array(
                'title' => 'PHP Consulting',
                'url' => 'php-consulting',
                'body' => 'php-consulting'
            )
        );

        DB::table('contents')->insert(
            array(
                'title' => 'PHP Outsourcing',
                'url' => 'php-outsourcing',
                'body' => 'php-outsourcing'
            )
        );

        DB::table('contents')->insert(
            array(
                'title' => 'PHP Programmers',
                'url' => 'php-programmers',
                'body' => 'php-programmers'
            )
        );

        DB::table('contents')->insert(
            array(
                'title' => 'PHP Programming',
                'url' => 'php-programming',
                'body' => 'php-programming'
            )
        );

        DB::table('contents')->insert(
            array(
                'title' => 'PHP Services',
                'url' => 'php-services',
                'body' => 'php-services'
            )
        );

        DB::table('contents')->insert(
            array(
                'title' => 'PHP Staffing',
                'url' => 'php-staffing',
                'body' => 'php-staffing'
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
