<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeUniqueSlugToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unique('slug');        //It will automatically create a Constraint during the Migration. Constraint Name: <table name>_<column name>_<action>  =  posts_slug_unique   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropUnique('posts_slug_unique');         //Here we will use the Constraint Name to drop the constraint. ( posts_slug_unique ) 
        });
    }
}









// Command:
// php artisan make:migration make_unique_slug_to_posts_table