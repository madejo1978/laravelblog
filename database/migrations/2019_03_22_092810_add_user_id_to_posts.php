<?php

/* php artisan make:migration add_user_id_to_posts 
    // 1. fill up and down functions, otherwise it will not work
    // 2. php artisan migrate
        // 2.2 undo: php artisan migrate:rollback
*/

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function ($table) {
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function ($table) {
            $table->dropColumn('user_id');
        });
    }
}
