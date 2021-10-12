<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOwnerIdToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('owner_id');       //'id' in the 'Users' table is unsigned. That's why here also we need to make the unsigned form of this foreign key of 'Uers' table.

            $table->foreign('owner_id')
                ->references('id')
                ->on('users') 
                ->onDelete('cascade');
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
            
            $table->dropForeign('posts_owner_id_foreign');        //Before deleting the foreign key column, first, we need to drop the constraint by using the constraint name.  Constraint Name: <table name>_<column name>_<action>

            $table->dropColumn('owner_id');                      //Then we can delete the foreign key column

        });
    }
}









// Command:
// php artisan make:migration add_owner_id_to_posts_table
